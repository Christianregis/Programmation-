const app = Vue.createApp({
    data() {
        return {
            newMessage: '',
            messages: []
        };
    },
    methods: {
        sendMessage() {
            axios.post('/messages/create', { message: this.newMessage })
                .then(() => {
                    this.newMessage = '';
                })
                .catch(error => {
                    console.error(error);
                });
        }
    }
});
app.mount('#app');
