<template>
    <div>
        <h1 class="text-center">Here are your orders</h1>
        <div class="jumbotron">
            <p class="lead" v-for="orderItem in orderList">
                {{getOrderItemText(orderItem)}}
            </p>
        </div>
    </div>



</template>

<script>
    export default {
        name: "OrderList",
        props: {orderList: {type: Array, default: () => [], required: false}},
        methods: {
            getOrderItemText(orderItem) {
                let text = 'At ' + orderItem.time.format('H:mm:s') + ' you ordered a ' + orderItem.selectedBeverage.name.toLowerCase();
                if (orderItem.selectedOptions.length > 0) {
                    text += ' with ';
                    text += orderItem.selectedOptions.map((selectedOption, index) => {
                        return selectedOption.name.toLowerCase() + (index === orderItem.selectedOptions.length - 1 ? '' : ' and ');
                    }).join('');
                }
                text += '.';
                return text;
            }
        }
    }
</script>

<style scoped>

</style>
