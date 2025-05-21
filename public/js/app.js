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
            event_id: 1, // <-- required by the backend
            invitor_email: 'lonn@ljholiday.com', // <-- required by the backend
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
                        email: this.email,
                        event_id: this.event_id,
                        invitor_email: this.invitor_email
                    })
                });

                const data = await res.json();
                this.message = data.message || 'Invite sent!';
                this.name = '';
                this.email = '';
            } catch (err) {
                console.error(err);
                this.message = 'Error sending invite.';
            }
        }
    }
});

app.mount('#app');

