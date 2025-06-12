<script setup>
   import data from '../../../../../../tableData.json'

</script>

<template>
    <table class="border-collapse">
        <tbody>
            <tr class="fs-xs text-table-header text-center border-bottom">
               <td class=" py-1 text-start px-2">Combination</td>
               <td class="border-dashed-rigth py-1 text-start px-2"></td>
               <td >Price play</td>
               <td>Volume play</td>
               <td>Total</td>
            </tr>
            <tr v-for="item in data" class="text-center border-bottom">
                <td class="py-1 px-1 border-dashed-rigth">{{ item.productName }} </td>
                <td class="border-dashed-rigth px-1">{{ item.customerName }}</td>
               <td class="px-1 text-important fw-medium text-decoration-underline">{{item.pricePlay}}</td>
               <td class="px-1 text-important fw-medium text-decoration-underline">{{item.volumePlay}}</td>
               <td class="px-1">{{item.total}}</td>
            </tr>
        </tbody>
    </table>
</template>