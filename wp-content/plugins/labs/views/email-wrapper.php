
<!-- Visuel pour la page email du plugin -->
 
<div class="wrap">
            <h1>Mail Settings</h1>

            <form method="post" action="options.php" novalidate="novalidate">
                <input type="hidden" name="option_page" value="general">
                <input type="hidden" name="action" value="update">
                <input type="hidden" id="_wpnonce" name="_wpnonce" value="d4d3f8b751">
                <input type="hidden" name="_wp_http_referer" value="/Projet_Wordpress-LABS/wp-admin/options-general.php">
                <table class="form-table">
                    <tbody>
                        <tr>
                            <th scope="row">
                                <label for="default_role">New User Default Role</label>
                            </th>
                            <td>
                                <select name="default_role" id="default_role">
                                    <option selected="selected" value="subscriber">Subscriber</option>
                                    <option value="contributor">Contributor</option>
                                    <option value="author">Author</option>
                                    <option value="editor">Editor</option>
                                    <option value="administrator">Administrator</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="submit">
                    <input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes">
                </p>
            </form>
        </div>