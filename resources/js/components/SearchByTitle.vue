<template>
    <div class="container">
        <div class="row justify-content-center">


            <div class="col-md-8">
                <input type="search" class="form-control" v-model="q" @change="load" placeholder="Search..."
                       aria-label="Search">
            </div>

            <div class="container col-md-8">

                <div class="list-group list-group-flush border-bottom scrollarea ">

                    <a href="#" v-for="result in results" class="list-group-item list-group-item-action py-3 lh-tight">

                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <strong class="mb-1">{{result.title}}</strong>
                            <img :src="result.image" width="100px">
                            <small class="text-muted">{{result.created_at}}</small>
                            <small class="text-muted">{{result.author.full_name}}</small>
                        </div>
                        <div class="col-10 mb-1 small">{{result.content}}</div>
                    </a>
                </div>


            </div>



        </div>
    </div>
</template>

<script>
export default {
    data: () => {
        return {
            resource_url: '/api/publications/search/titles?q=',
            q: "",
            results: [],
        }
    },
    methods: {
        load() {
            axios.get(this.resource_url + this.q).then((response) => {
                this.results = response.data.data;
            });
        },
    },

    mounted() {
        console.log('Component mounted.')
    }
}
</script>
