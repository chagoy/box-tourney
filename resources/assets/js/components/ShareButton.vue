<template>
	<div class="text-center">
		<div class="form-group">
			<button class="btn btn-alabama" @click.prevent="display">
				Share
			</button>
		</div>
		<div class="form-group" v-show="show">
			<code class="code" v-text="path"></code>
			<p class="form-input-hint">Copy and paste this link anywhere you like</p>
		</div>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				show: false,
				path: window.location.href
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
		}
	}
</script>