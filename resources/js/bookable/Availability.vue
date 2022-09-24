<template>
    <div>
        <h6 class="text-uppercase text-secondary font-weight-bolder">Check Availability</h6>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="from">From</label>
                <input v-model="from" type="text" name="from" id="from" class="form-control form-control-sm" placeholder="Start Date">
            </div>
            <div class="form-group col-md-6">
                <label for="to">To</label>
                <input v-model="to" type="text" name="to" id="to" class="form-control form-control-sm" placeholder="End Date">
            </div>
        </div>
        <button class="btn btn-secondary btn-block">Check!</button>
    </div>
</template>
<script>
export default {
    data() {
        return {
            from: null,
            to: null
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