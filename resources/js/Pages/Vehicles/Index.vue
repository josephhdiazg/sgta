<script setup>
import DefaultLayout from '@/Layouts/Default.vue';
import VehicleItem from '@/Components/VehicleItem.vue';

const mazda = {
    make: 'Mazda',
    model: 'CX-30',
    year: 2021,
    license_plate: 'JJR336',
};
</script>

<template>
    <DefaultLayout>
        <h1 class="font-medium text-3xl mb-10">Listado de Vehículos</h1>

        <VehicleItem :vehicle="mazda"></VehicleItem>
    </DefaultLayout>
</template>
