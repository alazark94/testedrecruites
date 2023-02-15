<template>
        <Head title="Edit Product"/>
        <div class="space-y-5">
            <h2 class="font-bold text-xl text-gray-800 leading-tight">
                Edit Product
            </h2>
            <Link
                href="/"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
            >Go Back</Link
            >
        </div>

    <div class="w-full flex justify-center">
        <form @submit.prevent="submit" class="py-10">
            <div class="mb-6">
                <label
                    for="name"
                    class="block mb-2 uppercase font-bold text-xs text-gray-700"
                >
                    Product Name
                </label>
                <input
                    v-model="form.name"
                    type="text"
                    name="name"
                    id="name"
                    class="border rounded border-gray-400 p-2"
                />
                <span
                    class="block text-red-500 text-xs mt-1"
                    v-if="form.errors.name"
                >{{ form.errors.name }}</span
                >
            </div>
            <div class="mb-6">
                <label
                    for="quantity"
                    class="block mb-2 uppercase font-bold text-xs text-gray-700"
                >
                    Product Quantity
                </label>
                <input
                    v-model="form.quantity"
                    type="text"
                    name="quantity"
                    id="quantity"
                    class="border rounded border-gray-400 p-2"
                />
                <span
                    class="block text-red-500 text-xs mt-1"
                    v-if="form.errors.quantity"
                >{{ form.errors.quantity }}</span
                >
            </div>
            <div class="mb-6">
                <label
                    for="price"
                    class="block mb-2 uppercase font-bold text-xs text-gray-700"
                >
                    Product Price
                </label>
                <input
                    v-model="form.price"
                    type="text"
                    name="price"
                    id="price"
                    class="border rounded border-gray-400 p-2"
                />
                <span
                    class="block text-red-500 text-xs mt-1"
                    v-if="form.errors.price"
                >{{ form.errors.price }}</span
                >
            </div>
            <button
                type="submit"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                :disabled="form.processing"
            >
                Submit
            </button>
        </form>
    </div>
</template>

<script setup>
import { Link, useForm } from "@inertiajs/inertia-vue3";
const props = defineProps({
    product: Object
});

let form = useForm({
    name: props.product.name,
    quantity: props.product.quantity,
    price: props.product.price
})

const submit = () => {
    form.put(`/${props.product.id}`)
}
</script>
