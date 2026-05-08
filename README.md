# EPI AI Blueprint

![Status](https://img.shields.io/badge/Status-Active%20Learning%20Blueprint-0A66C2)
![Track](https://img.shields.io/badge/Track-AI%20for%20Developers-111827)
![Audience](https://img.shields.io/badge/Audience-Software%20Engineers-16A34A)
![Focus](https://img.shields.io/badge/Focus-Token%20Economics%20%E2%86%92%20MCP%20Architecture-F59E0B)

Official repository for the **"AI for Developers"** session at **EPI Digital School**.
This blueprint covers the full spectrum of modern AI engineering workflows — from
**Token Economics** fundamentals to **MCP Architecture** and production integration patterns.

---

## Why This Blueprint Exists

The **EPI AI Blueprint** is a practical implementation guide for engineers who want to:

- Build reliable AI-assisted development workflows.
- Understand model costs and token-level tradeoffs.
- Design robust tool orchestration with MCP-style architecture.
- Integrate AI capabilities into real software products.

This is not theory-only content. It is a delivery-focused, engineering-grade blueprint
you can reuse in your own projects.

---

## Meet the Animators

| Animator              | Role                                        | Profile                                                    |
| --------------------- | ------------------------------------------- | ---------------------------------------------------------- |
| **Souhail SBOUI**     | CTO & Co-founder at Tunitek                 | [LinkedIn](https://www.linkedin.com/in/sbsouhail/)         |
| **Yassine Benghanem** | Co-founder · Software Engineer · Automation | [LinkedIn](https://www.linkedin.com/in/yassine-benghanem/) |
| **Ammar Ahmed**       | Mobile Developer · Software Engineer        | [LinkedIn](https://www.linkedin.com/in/ammar-ahmed-tn/)    |

**Company:** Tunitek — [LinkedIn](https://www.linkedin.com/company/tuintekagency)

---

## The Demo Project: `larashop-demo`

`larashop-demo` is a Laravel-based e-commerce app used as the live integration
playground during the masterclass. See [`larashop-demo/README.md`](./larashop-demo/README.md)
for setup instructions, project structure, and the live demo prompts.

### What it demonstrates

- **AI-powered inventory workflows** — automated sync and intelligent stock update strategies.
- **Agentic product search** — natural-language product discovery with multi-step reasoning.
- **Production-minded integration** — clean architecture patterns for embedding AI into a Laravel backend.
- **Developer-first implementation** — maintainable code, workflow visibility, extensible infrastructure.

---

## Helpful Resources

### Paid Plans (~$20/month)

Recommended tools for your day-to-day AI development workflow.

| Tool                                     | Why It Matters                                                                              | Plan              |
| ---------------------------------------- | ------------------------------------------------------------------------------------------- | ----------------- |
| [Cursor](https://www.cursor.com/)        | AI-native IDE that understands your whole codebase — accelerates implementation workflows.  | **$20/mo**        |
| [Claude.ai](https://claude.ai/)          | Best for complex coding logic, architectural reasoning, and high-context engineering tasks. | **$20/mo**        |
| [ChatGPT](https://chatgpt.com/)          | Versatile Swiss Army knife for brainstorming, coding, debugging, and documentation.         | **$20/mo (Plus)** |
| [Perplexity](https://www.perplexity.ai/) | AI search engine for technical docs, quick research, and source-backed exploration.         | **$20/mo**        |

---

### Zero-Budget Toolkit — Run AI Locally, Free Forever

No subscription? Run open-source models on your own machine.

#### Step 1 — Pick a Runner

| Tool                                  | Platform                | Best For                                     |
| ------------------------------------- | ----------------------- | -------------------------------------------- |
| [Alpaca](https://jeffser.com/alpaca/) | macOS                   | Native app, zero config, great for beginners |
| [Ollama](https://ollama.ai/)          | macOS · Linux · Windows | CLI + local API server, most flexible        |
| [LM Studio](https://lmstudio.ai/)     | macOS · Windows         | GUI model browser + chat interface           |

#### Step 2 — Pick a Model

| Model                                                             | Best For                                  | RAM Needed | Ollama Command                 |
| ----------------------------------------------------------------- | ----------------------------------------- | ---------- | ------------------------------ |
| [Llama 3.1 8B](https://ollama.com/library/llama3.1)               | General coding · chat · reasoning         | ~6 GB      | `ollama run llama3.1`          |
| [DeepSeek Coder V2](https://ollama.com/library/deepseek-coder-v2) | Code generation · debugging · refactoring | ~9 GB      | `ollama run deepseek-coder-v2` |
| [Qwen2.5-Coder 7B](https://ollama.com/library/qwen2.5-coder)      | Code completion · code review             | ~5 GB      | `ollama run qwen2.5-coder`     |
| [Mistral 7B](https://ollama.com/library/mistral)                  | Reasoning · summarization · Q&A           | ~5 GB      | `ollama run mistral`           |
| [Phi-4 Mini](https://ollama.com/library/phi4-mini)                | Fast reasoning · low RAM machines         | ~3 GB      | `ollama run phi4-mini`         |
| [Gemma 3 9B](https://ollama.com/library/gemma3)                   | Multilingual · instruction following      | ~6 GB      | `ollama run gemma3`            |

> **Tip:** Start with `llama3.1` for general tasks or `qwen2.5-coder` for pure coding sessions.
> All models above run fully offline — no API key, no cost.

---

## Engagement & Feedback

- **Feedback Form:** [AI for Developers — Event Feedback (EPI Digital School)](https://forms.gle/xrJBKHtjrrQTHb677)
- **Vibe Check Quiz:** [Insert Quiz Link Here]

---

## Repository Map

```text
epi-ai-blueprint/
├── presentation/      # Slides, session narrative, and visual architecture
├── larashop-demo/     # Laravel demo — AI integration workflows in e-commerce
└── resources/         # Reference docs, links, templates, and supporting assets
```

---

## Suggested Learning Workflow

1. Start with `presentation/` to understand the architecture and session flow.
2. Explore `larashop-demo/` to see AI integration patterns in production-like code.
3. Use `resources/` to deepen implementation, tooling, and deployment practices.

---

## Call to Action

If this blueprint helps you:

- Star this repository.
- Share it with your engineering peers.
- Follow the animators on LinkedIn for upcoming sessions and updates.

Let's build AI-native software engineering workflows — intentionally, architecturally, and at scale.
