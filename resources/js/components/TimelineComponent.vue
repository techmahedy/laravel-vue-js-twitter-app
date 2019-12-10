<template>
    <div class="col-md-8 posts">
       
        <div class="media" v-for="post in posts" :key="post.id">
            <img class="mr-3" />
            <div class="media-body" >
                <div class="mt-3">
                    <a :href="post.user.profileLink">{{ post.user.name }}</a> |  {{ post.createdDate }}
                </div>
                <p>{{ post.body }}</p>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    data() {
        return {
            posts: [],
        }
    },
    methods: {
       loadTwiteFromSpecificUser(){
         axios.get('/posts').then((response => {
            this.posts = response.data;
         }));
       }
    },
    mounted() {

        this.loadTwiteFromSpecificUser();

        Event.$on('added_tweet', (post) => {
            //unshift -> Add new items to the beginning of an array:
            this.posts.unshift(post); 
        });
    }
}
</script>