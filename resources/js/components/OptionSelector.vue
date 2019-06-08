<template>
    <div class="form-group form-row">

        <label class="col-form-label col-sm-4" for="existingOptionSelect">Change option</label>
        <select class="form-control col-sm" id="existingOptionSelect"
                v-model="selectedOption"
                @change="onChange"
                :disabled="disabled">

            <option :value="null"
                    selected
                    disabled>
                Select an option
            </option>

            <option v-for="option in possibleOptions"
                    :value="option">
                {{option.name}}
            </option>
        </select>

        <v-icon v-if="selectedOption" class="col-sm-2">delete</v-icon>
    </div>
</template>

<script>
    export default {
        name: "OptionSelector",
        props: {
            disabled: {type: Boolean, default: false, required: false},
            possibleOptions: {type: Array, default: () => [], required: true},
            optionBinding: {type: Object, default: null, required: false}
        },
        data() {
            return {selectedOption: this.optionBinding}
        },
        methods: {
            onChange() {
                this.$emit('selected', this.selectedOption);
                this.selectedOption = this.optionBinding;
            }
        },
        watch: {
            optionBinding() {
                this.selectedOption = this.optionBinding;
            }
        }
    }
</script>

<style scoped>

</style>
