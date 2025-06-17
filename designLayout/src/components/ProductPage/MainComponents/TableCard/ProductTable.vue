<script setup>

    //We need two different datasets because if we have only one, the 
    //sorting works for both tables at the same time, which is not what we want
    import riskData from '../../../../../riskTableData.json'
    import salesData from '../../../../../salesTableData.json'

    import { ref,onMounted} from 'vue'

    const {isRisk} = defineProps(['isRisk'])

    let data=ref([]);
    
    onMounted(() => { 
      isRisk? data.value=riskData: data.value=salesData
    })

    const sort =()=>{
        data.value.sort((a,b)=>{
            let totalOne = a.total.split(' ')[0];
            let totalTwo = b.total.split(' ')[0];
            return totalTwo-totalOne;
        });
    }
</script>

<template>
    <div class="mt-4 bg-white mx-1 border rounded-2 mt-auto table-responsive">
    <table class="border-collapse w-100">
        <tbody>
            <tr class="fs-xs text-table-header text-center border-bottom">
               <td class=" py-1 text-start px-2">Combination</td>
               <td class="border-dashed-rigth py-1 text-start px-2"></td>
               <td >{{isRisk? 'Disruption':'Price play'}}</td>
               <td>{{isRisk? 'Erosion':'Volume play'}}</td>
               <td>
                <span class="d-flex align-items-center justify-content-center gap-2" @click="sort">
                    <span>Total</span> 
                    <div><img src="../../../../assets/arrows/sortArrows.svg" alt="Sort Arrows"></div>
                </span>
            </td>
            </tr>
            <tr v-for="item in data" class="text-center border-bottom">
                <td class="py-1 px-1 border-dashed-rigth">{{ item.productName }} </td>
                <td class="border-dashed-rigth px-1">{{ item.customerName }}</td>
               <td class="px-1 text-important fw-medium text-decoration-underline">{{item.pricePlay}}</td>
               <td class="px-1 text-important fw-medium text-decoration-underline">{{item.volumePlay}}</td>
               <td class="px-1">{{item.total}} </td>
            </tr>
        </tbody>
    </table>
    </div>
</template>