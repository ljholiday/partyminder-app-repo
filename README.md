# Party Minder App

**Putting the social back in social networks—one dinner party at a time.**

## Overview

Party Minder is a privacy-focused, invite-only social platform built around real-world gatherings. Designed to help people host and attend memorable dinner parties, the app supports seamless planning, meaningful connections, and trusted vendor integration—all with a GTD-inspired development workflow.

This repository contains the core application code for the Party Minder platform, including:

- Frontend (Vue)
- Backend API (Laravel)
- Custom modules and integrations
- Feature-specific branches for invites, chat, profiles, and event management

The hosted app is available at:
🔗 https://app.partyminder.com

---

## Features

- 🧑‍🍳 Host & guest profiles with food preferences and availability
- 📅 Event planning with invite flow and RSVP tracking
- 🗣️ Private group chat for ongoing party conversation
- 🛒 Optional vendor integration (restaurants, groceries, food trucks)
- 💵 Tip & payment support via Stripe or PayPal
- 🧘 Simple, modular architecture with a Unix-style API philosophy

---

## Tech Stack

| Layer       | Tech                |
|-------------|---------------------|
| Frontend    | Vue.js              |
| Backend     | Laravel             |
| Database    | MariaDB             |
| Hosting     | GreenGeeks Shared   |
| Dev Tools   | Git, SSH, VS Code   |
| Email       | Mailer for invites  |

---

## Project Structure

```
party-minder-app/
├── resources/
│   └── views/             # Blade templates (snake_case naming)
├── public/                # Static assets (e.g., CSS, images)
├── routes/                # Laravel web and API routes
├── app/                   # Core Laravel logic (Controllers, Models, etc.)
└── .env                   # Environment-specific config (not tracked)
```

---

## Development Setup

> ⚠️ No Node.js or npm required for styling at this stage
> All CSS is static and lives in `/public/css`.

### Clone the Repository

```bash
git clone git@github.com:ljholiday/party-minder-app.git
cd party-minder-app
```

### Remote Editing via SSH

```bash
code --remote ssh://your-user@your-server
```

### Configure the `.env` File

```env
DATABASE_URL="mysql://username:password@localhost:3306/party_minder"
JWT_SECRET="your_super_secret"
```

---

## Deployment

This app is hosted on a GreenGeeks shared server.
Laravel’s `public/` directory is mapped to:

```
~/public_html/domains/app.partyminder.com/public
```

Deploy by SSHing into the server and pulling updates from GitHub.

---

## License

This project is proprietary and maintained by [LJ Holiday](https://ljholiday.com).
For licensing or collaboration inquiries, please reach out directly.

---

## Credits

Built with ❤️ by humans and AI working side-by-side.
