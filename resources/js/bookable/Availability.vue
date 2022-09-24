<template>
    <div>
        <h6 class="text-uppercase text-secondary font-weight-bolder">Check Availability</h6>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="from">From</label>
                <input v-model="from" type="text" name="from" id="from" class="form-control form-control-sm" placeholder="Start Date" @keyup.enter="check">
            </div>
            <div class="form-group col-md-6">
                <label for="to">To</label>
                <input v-model="to" type="text" name="to" id="to" class="form-control form-control-sm" placeholder="End Date" @keyup.enter="check">
            </div>
        </div>
        <button class="btn btn-secondary btn-block" @click="check" :disabled="loading">Check!</button>
    </div>
</template>
<script>
export default {
    data() {
        return {
            from: null,
            to: null,
            loading: false,
            status: null,
            errors: null
        }
    },
    methods: {
        check() {
            this.loading = true;
            this.errors = null;

            axios.get(`/api/bookables/${this.$route.params.id}/availability?from=${this.from}&to=${this.to}`)
                .then(response => {
                    this.status = response.status;
                }).catch(error => {
                    if (error.response.status === 422) {
                        this.errors = error.response.data.errors;
                    }
                    this.status = error.response.status;
                }).then(() => this.loading = false);
        }
    }
}
</script>
<style scoped>
label {
    font-size: 0.7rem;
    text-transform: uppercase;
    color: gray;
    font-weight: bolder;
}
</style>