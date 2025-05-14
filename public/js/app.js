const app = Vue.createApp({});

app.component('guest-invite-form', {
    template: `
        <form @submit.prevent="submitForm">
            <input v-model="name" placeholder="Name" required>
            <input v-model="email" type="email" placeholder="Email" required>
            <button type="submit">Send Invite</button>
            <p v-if="message" v-text="message"></p>
        </form>
    `,
    data() {
        return {
            name: '',
            email: '',
            message: ''
        };
    },
    methods: {
        async submitForm() {
            this.message = '';
            try {
                const res = await fetch('/api/invite', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        name: this.name,
                        email: this.email
                    })
                });

                const data = await res.json();
                this.message = data.message || 'Invite sent!';
                this.name = '';
                this.email = '';
            } catch (err) {
                this.message = 'Error sending invite.';
            }
        }
    }
});

app.mount('#app');

