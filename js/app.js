const { createApp } = Vue

createApp({
    data() {
        return {
            todos: [],
            inputText: '',
        }
    },
    methods: {
        takeData() {
            axios.get('server.php').then((reply) => {
                this.todos = reply.data.results.todos
            })
        },
        putData() {
            if (!this.inputText) {
                return
            } else {
                const newTodo = {
                    todo: this.inputText
                }
                axios
                    .post('newdata.php', newTodo, {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        },
                    })
                    .then((reply) => {
                        console.log(reply.data.results)
                        this.todos = reply.data.results
                        this.inputText = ""
                    })
            }

        }
    },
    created() {
        this.takeData()
    },
}).mount('#app')