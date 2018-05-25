<template lang="html">
    <tr>
        <td>{{ num }}</td>
        <td>
            <input type="number" name="quantity[]" min="0" step="0.1" v-model="quantity" @change="saveTotal">
        </td>
        <td>{{ products[product_id].unity }}</td>
        <td>
            <select name="item[]" v-model="product_id" @change="saveTotal">
                <option v-for="product in products" :value="product.id">
                    {{ product.description }}
                </option>
            </select>
        </td>
        <td>{{ products[product_id].price | currency }}</td>
        <td>
            <input type="hidden" name="subtotal[]" :value="total">
            {{ total | currency }}
        </td>
    </tr>
</template>

<script>
export default {
    data() {
        return {
            product_id: 0,
            quantity: 0,
            products: [
                {id: 0, unity: 'kg', description: 'producto uno', price: 50},
                {id: 1, unity: 'cm', description: 'producto dos', price: 150},
                {id: 2, unity: 'lts', description: 'producto tres', price: 80},
                {id: 3, unity: 'pieza', description: 'producto cuatro', price: 24},
            ]
        };
    },
    props: ['num'],
    methods: {
        saveTotal() {
            this.$emit('subtotal', this.total, this.num);
        }
    },
    computed: {
        total() {
            return this.products[this.product_id].price * this.quantity;
        },
    },
    filters: {
        currency: function (value) {
          return '$ ' + value;
        }
    },
    // created() {
    //     axios.get('runa/articulos').then(response => {
    //         this.products = response.data;
    //     });
    // }
};
</script>