<script setup>
import { reactive } from 'vue';
import axios from 'axios';
import Text from '@/Components/Text.vue';
import Label from '@/Components/Label.vue';

const form = reactive({
    model_name: '',
    brand: '',
    color: '',
    year: '',
    release_date: '',
});

const onSubmit = async () => {
    const newCar = {
        'model_name': form.model_name,
        'brand': form.brand,
        'color': form.color,
        'year': form.year,
        'release_date': form.release_date,
    };
    try {
        const response = await axios.post('/cars/create', newCar)
            .then((result) => {
                console.log(result);
            }).catch((err) => {
                console.log(err);
            });
    } catch (error) {
        console.log(error);
    }
}

</script>

<template>
     <section class="container bg-green-50">
        <div class="container m-auto max-w-2xl py-24">
            <div class="bg-white px-6 py-8 mb-4 shadow-md rounded-md border m-4 md:m-0">
                <form class="row " @submit.prevent="onSubmit">
                    <h2 class="text-3xl text-center font-semibold mb-6">Add Job</h2>

                    <div class="m-1">
                        <Label for="password" value="Model Name" />
                        <Text id="model_name" type="text" v-model="form.model_name" required  />
                    </div>

                    <div class="m-1">
                        <Label for="password" value="Brand" />
                        <Text id="brand" type="text" v-model="form.brand" required  />
                    </div>

                    <div class="m-1">
                        <Label for="password" value="Color" />
                        <Text id="color" type="text" v-model="form.color" required  />
                    </div>

                    <div class="m-1">
                        <Label for="password" value="Year" />
                        <Text id="year" type="text" v-model="form.year" required  />
                    </div>
                    
                    <div class="m-1">
                        <Label for="password" value="Release Date" />
                        <input v-model="form.release_date" type="date" id="release_date" release_date="name"
                            class="border rounded w-full py-2 px-3 mb-2" 
                            required />
                    </div>

                    <div>
                        <button
                            class="btn btn-primary mb-3"
                            type="submit">
                            Add Car
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</template>