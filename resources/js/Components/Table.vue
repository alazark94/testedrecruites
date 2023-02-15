<template>
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">Product name</th>
                <th scope="col" class="px-6 py-3">Quantity</th>
                <th scope="col" class="px-6 py-3">Unit Price</th>
                <th scope="col" class="px-6 py-3">Total Value</th>
                <th scope="col" class="px-6 py-3">Date Submitted</th>
                <th scope="col" class="px-6 py-3">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b" v-for="product in props.products" :key="product.id">
                <th
                    scope="row"
                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
                >
                    {{ product.name }}
                </th>
                <td class="px-6 py-4">{{ product.quantity }}</td>
                <td class="px-6 py-4">{{ new Intl.NumberFormat().format(product.price)}}</td>
                <td class="px-6 py-4">{{ new Intl.NumberFormat().format(product.price * product.quantity) }}</td>
                <td class="px-6 py-4">{{ product.created_at }}</td>
                <td class="px-6 py-4">
                    <div class="flex">
                        <button
                            aria-label="Edit Product"
                            class="action-button p-1 focus:outline-none focus:shadow-outline text-teal-500 hover:text-teal-600"
                            @click="$emit('on-edit', product)"
                        >
                            Edit
                        </button>
                        <button
                            aria-label="Delete Product"
                            class="action-button p-1 focus:outline-none focus:shadow-outline text-red-500 hover:text-red-600"
                            @click="$emit('on-delete', product)"
                        >
                            Delete
                        </button>
                    </div>
                </td>
            </tr>
            <tr>
                <th
                    scope="row"
                    class="px-6 py-4 font-Bold text-3xl text-gray-900 whitespace-nowrap"
                >
                    Total
                </th>
                <td class="px-6 py-4 font-medium text-3xl">
                    {{ new Intl.NumberFormat().format(totalPrice) }}
                </td>
            </tr>
        </tbody>
    </table>
</template>
<script setup>
let props = defineProps({
    products: Array,
});

let totalPrice = 0;

props.products.forEach(product => {
    const totalValue = product.quantity * product.price;

    totalPrice+=totalValue
});
</script>
<style></style>
