<template>
    <div class="col-md-4">
        <form @submit.prevent="saveTweet">
            <div class="form-group">
              <input type="text" v-model="body" placeholder="Twitte here..">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">
                    Tweet
                </button>
            </div>
        </form>        
    </div>
</template>
<script>
export default {
   data( ){
    return {
        body: '',
        postData: {}
    }
   },
    methods: {
        saveTweet() {
            axios.post('/tweet/save', {body: this.body}).then(response => {
               
                this.postData = response.data;

                Event.$emit('added_tweet', this.postData);

            }).catch(e => {
                console.log(e);
            });
            this.body = '';
        }
    }
}
</script>