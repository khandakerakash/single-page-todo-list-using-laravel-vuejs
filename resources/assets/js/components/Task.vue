<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-heading">My Task</div>

                    <div class="panel-body">
                        <div class="input-group">
                            <input type="text" class="form-control" v-model="task.title" @keydown.enter="create">
                            <span class="input-group-btn">
                                <button class="btn btn-success" @click="create"><i class="fa fa-plus"></i> Add</button>
                            </span>
                        </div>
                        <div class="task-list">
                            <div class="alert alert-danger" v-if="!tasks.length">
                                Currently You have no tasks!
                            </div>
                            <ul class="list-unstyled">
                                <li v-for="task in tasks" :key="task.id" :class="{ done: task.completed}">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" v-model="task.completed" @click="done(task)">{{ task.title }}
                                        </label>
                                        <div class="pull-right">
                                            <a class="btn btn-danger btn-sm" href="#" @click.prevent="remove(task)">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-footer" v-if="tasks.length">
                        <span class="label label-default">You have {{ tasks.length }} tasks <i class="fa fa-frown"></i></span>
                        <span class="label label-warning"> {{ reminingTask() }} tasks left <i class="fa fa-smile"></i></span>
                        <span class="label label-success"> {{ completedTask() }} tasks completed <i class="fa fa-check"></i></span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            this.fetchData()
        },
        data() {
            return {
                tasks: [],
                task: {
                    title: ''
                }
            }
        },
        methods: {
            fetchData() {
                axios.get(`/api/tasks`)
                    .then((res) => {
                        this.tasks = res.data
                    })
                    .catch((err) => {
                        console.log(err)
                    })
            },
            create() {
                axios.post(`/api/tasks`, this.task)
                    .then((res) => {
                        this.tasks.unshift(res.data),
                        this.task.title = ''
                    })
                    .catch((err) => {
                        console.log(err)
                    })
            },
            done(task) {
                axios.put(`/api/tasks/${task.id}`, {
                    completed: task.completed
                })
                    .then((res) => {
                        console.log('Task Updated')
                    })
                    .catch((err) => {
                        console.log(err)
                    })
            },
            remove(task) {
                axios.delete(`/api/tasks/${task.id}`)
                    .then((res) => {
                        const taskIndex = this.tasks.indexOf(task)
                        this.tasks.splice(taskIndex, 1)
                    })
                    .catch((err) => {
                        console.log(err)
                    })
            },
            reminingTask() {
                return this.tasks.filter(task => {
                    return !task.completed
                }).length
            },
            completedTask() {
                return this.tasks.filter(task => {
                    return task.completed
                }).length
            }
        }
    }
</script>

<style>
    body, .task-list {
        padding-top: 5%;
    }
    .done label {
        text-decoration: line-through;
    }
    .panel-footer span {
        padding: 5px!important;
        margin-left: 5px;
    }
</style>