<template lang="html">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th v-for="head in header">{{ head }}</th>
                </tr>
            </thead>
            <tbody>
                <row :num="1" @subtotal="addToTotal"></row>
                <row :num="2" @subtotal="addToTotal"></row>
                <row :num="3" @subtotal="addToTotal"></row>
                <row :num="4" @subtotal="addToTotal"></row>
                <row :num="5" @subtotal="addToTotal"></row>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4"></td>
                    <td><b>Total:</b></td>
                    <td>
                        $ {{ total - retainer - discount*total }}
                        <input type="hidden" name="amount" :value="total - retainer - discount*total">
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            header: ['#', 'Cantidad', 'Unidad', 'Material', 'Precio unitario', 'Importe'],
            subtotals: [0, 0, 0, 0, 0],
            total: 0,
        };
    },
    props: ['retainer', 'discount'],
    methods: {
        addToTotal(total, num) {
            this.subtotals[num - 1] = total;
            this.total = this.subtotals.reduce(function (total, value) {
                return total + value;
            }, 0);
        }
    },
};
</script>