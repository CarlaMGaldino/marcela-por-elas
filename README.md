# Marcela Por Elas — Tema WordPress

Tema customizado para o site [Marcela Por Elas](https://skyblue-narwhal-105507.hostingersite.com/).

## CI/CD (GitHub Actions → Hostinger)

A cada push na branch `main`, o workflow `.github/workflows/deploy-hostinger.yml`:

1. Valida a sintaxe PHP dos templates
2. Envia os arquivos do tema para a Hostinger via SSH/rsync
3. Limpa o cache do WordPress (se WP-CLI estiver disponível)

### Secrets necessários

Configure em **GitHub → Repositório → Settings → Secrets and variables → Actions**:

| Secret | Valor |
|--------|-------|
| `SSH_HOST` | IP do SSH da Hostinger |
| `SSH_PORT` | Porta SSH (ex.: `65002`) |
| `SSH_USER` | Usuário SSH da Hostinger |
| `SSH_THEME_PATH` | Caminho absoluto da pasta do tema no servidor |
| `SSH_WP_PATH` | Caminho absoluto do WordPress (`public_html`) |
| `SSH_PRIVATE_KEY` | Chave privada SSH (conteúdo completo do arquivo `.pem` / `id_ed25519`) |

A chave pública correspondente deve estar cadastrada no **hPanel → Acesso SSH**.

### Configurar secrets pelo terminal

```bash
cd wp-content/themes/marcela-por-elas

gh secret set SSH_HOST --body "SEU_IP"
gh secret set SSH_PORT --body "65002"
gh secret set SSH_USER --body "SEU_USUARIO"
gh secret set SSH_THEME_PATH --body "/home/.../public_html/wp-content/themes/marcela-por-elas"
gh secret set SSH_WP_PATH --body "/home/.../public_html"
gh secret set SSH_PRIVATE_KEY < ~/.ssh/SUA_CHAVE_PRIVADA
```

### Deploy manual

Actions → **Deploy theme to Hostinger** → **Run workflow**
