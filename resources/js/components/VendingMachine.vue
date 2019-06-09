<template>

    <div>
        <h1 class="text-center">Select your order</h1>

        <beverage-selector
            :content="content"
            @selected="setSelection"
        />

        <template v-for="(option, index) in selectedOptions">
            <option-selector
                :option-binding="selectedOptions[index]"
                :possible-options="possibleOptions"
                @deleted="deleteOption(index)"
                @selected="changeOption($event, index)"
            />
        </template>

        <option-selector
            :disabled="!selectedBeverage || possibleOptions.length === 0"
            :option-binding="null"
            :possible-options="possibleOptions"
            @selected="addOption"
        />

        <div class="text-center">
            <button @click="order" class="btn-block btn-lg btn-primary">
                Order selection
            </button>
        </div>
    </div>
</template>

<script>
    import BeverageSelector from "@/js/components/BeverageSelector";
    import OptionSelector from "@/js/components/OptionSelector";

    export default {
        name: "VendingMachine",
        components: {OptionSelector, BeverageSelector},
        data() {
            return {
                selectedBeverage: null,
                possibleOptions: [],
                selectedOptions: [],
                selectedOption: null
            }
        },
        props: ['content'],
        methods: {
            setSelection(thing) {
                this.selectedBeverage = thing;
                if (this.selectedBeverage !== null) {
                    this.possibleOptions = _.cloneDeep(this.selectedBeverage.possibleOptions);
                    this.selectedOptions = [];
                }
            },
            order() {
                this.$emit('ordered', this.selectedBeverage, this.selectedOptions);
            },
            addOption(option) {
                this.selectedOptions.push(option);
            },
            deleteOption(index) {
                this.selectedOptions.splice(index, 1);
            },
            changeOption(option, index) {
                this.$set(this.selectedOptions, index, option);
            }
        }
    }
</script>

<style scoped>

</style>
