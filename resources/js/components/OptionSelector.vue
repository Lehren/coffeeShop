<template>
    <div class="form-group form-row">

        <label class="col-form-label col-sm-4" for="existingOptionSelect">
            {{ selectedOption ? 'Change option' : 'Select an option'}}
        </label>
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
                    :disabled="selectedOption && option.name === selectedOption.name"
                    :value="option">
                {{option.name}}
            </option>
        </select>

        <div class="col-sm-2 text-center" v-if="selectedOption">
            <v-icon @click="$emit('deleted')">delete</v-icon>
        </div>

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
