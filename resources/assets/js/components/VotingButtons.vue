<template>
    <div>
        <button @click="submitVote" class="btn ">👍</button>
        <button class="btn { down ? '' : 'disabled }">🖕</button>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                upvote: false,
                down: false
            }
        },

        methods: {
            submitVote() {
                if (this.upvote == false) {
                    this.upvote = true;
                } else { 
                    return this.upvote = false;
                }
            }
        }
    }
</script>