<template>
    <div class="text-center">
        <button class="btn btn-alabama" @click="display">Report a Robbery</button>
        

        <div class="ajax-form" v-show="this.show">
            <div class="form-group">
                <label class="form-label">Your Name</label>
                <input type="text" class="form-input" v-model="name">
            </div>
            <div class="form-group">
                <label class="form-label">Your Email</label>
                <input type="text" class="form-input" v-model="email">
            </div>
            <div class="form-group">
                <label class="form-label">Who was fighting, what was the score, and what part was the robbery? Please be detailed and state why you think the decision was incorrect.</label>
                <textarea class="form-input" name="" id="" rows="4" v-model="message"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-alabama" @click.prevent="snitch">Snitch</button>
            </div>
        </div>

        <p v-show="thanks">Thanks for sending that in...</p>
    </div>

</template>

<script>
    export default {

        props: ['tournament'],

        data() {
            return {
                show: false,
                name: '',
                email: '',
                message: '',
                thanks: false
            }
        },

        methods: {
            display() {
                if (this.show == true ) {
                    this.show = false;
                } else {
                    this.show = true;
                }
            },

            snitch() {
                axios.post("/robbery", {
                    name: this.name, 
                    email: this.email,
                    message: this.message,
                    tournament: this.tournament
                })
                    .then(({data}) => {
                        this.wipe();
                        this.thankYou();
                    })
            },

            wipe() {
                this.name = '';
                this.email = '';
                this.message = '';
            },

            thankYou() {
                this.thanks = true;
                setTimeout(() => {
                    this.show = false;
                }, 400);
                setTimeout(() => {
                    this.thanks = false;
                }, 3000);
            }
        }
    }
</script>
