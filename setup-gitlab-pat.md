# Setting Up Gitlab Personal Access Token for Composer

Steps:

1. Go to `Gitlab` website.
2. Click `Profile` then on the dropdown menu, choose `Preferences`.
3. On the sidebar, choose `Access Tokens`.
4. On the Personal Access Tokens page, enter the `Token name` and `Expiration date` (optional).
5. On `Select scopes`, just tick the `read_api` scope.
6. Submit by clicking the `Create personal access token` button.
7. After submitting, look for `Your new personal token` textbox.
8. Copy the token generated.
9. Open terminal and check if Composer is intalled by running `composer --version`.
10. If installed already, run this command to make Composer use the token on every package installs:

```bash
$ composer g config http-basic.git.fligno.com ___token___ <Personal Access Token>
```
