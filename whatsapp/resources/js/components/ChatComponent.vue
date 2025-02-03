<template>
    <div>
        <div v-for="message in messages" :key="message.id">
            <strong>@{{ message.user.name }}</strong>: @{{ message.message }}
        </div>
        <form @submit.prevent="sendMessage">
            <input v-model="newMessage" type="text" placeholder="Écrire un message...">
            <button type="submit">Envoyer</button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            messages: [],
            newMessage: '',
        };
    },
    mounted() {
        window.Echo.channel('chat')
            .listen('MessageSent', (e) => {
                this.messages.push(e.message);
            });
    },
    methods: {
        sendMessage() {
            axios.post('/message-create', { message: this.newMessage })
                .then(response => {
                    this.newMessage = '';
                })
                .catch(error => {
                    console.error(error);
                });
    }
}
}
</script>

<style scoped>
/* Ajoute des styles ici */
</style>
