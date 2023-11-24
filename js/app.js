const { createApp } = Vue

createApp({
    data() {
        return {
            todos: [],
            ciao: 'ciao',
        }
    },
    methods: {
        takeData() {
            axios.get('server.php').then((reply) => {
                this.todos = reply.data.results.todos
            })
        }
    },
    created() {
        this.takeData()
    },
}).mount('#app')