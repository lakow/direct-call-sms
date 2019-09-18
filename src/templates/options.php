<?php 
$dc_sms_options = get_option('dc_sms_config');
?>
<style>.form-table{ margin-top: 1.5em}</style>
<div class="wrap">
    <h1>Configuração da API</h1>
    Informe os dados abaixo para utilizar o serviço:
    <form method="post" action="options.php">
        <?php settings_fields('dc_sms_options'); ?>
        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row"><label for="dc_sms_config[client_id]">Client ID</label></th>
                    <td>
                        <input name="dc_sms_config[client_id]" type="text" id="dc_sms_config[client_id]" value="<?php echo $dc_sms_options['client_id']; ?>" class="regular-text code" required>
                        <p class="description" id="api-key-description">Código identificador do cliente Directcall (login recebido em Instrução de Uso)</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="dc_sms_config[secret]">Client Secret</label></th>
                    <td>
                        <input name="dc_sms_config[secret]" type="password" id="dc_sms_config[secret]" value="<?php echo $dc_sms_options['secret']; ?>" class="regular-text" required>
                        <p class="description" id="api-key-description">Código secreto do cliente Directcall (senha recebida em Instrução de Uso)</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="dc_sms_config[origin]">Número de origem</label></th>
                    <td>
                        <input name="dc_sms_config[origin]" type="text" maxlength="13" id="dc_sms_config[origin]" value="<?php echo $dc_sms_options['origin']; ?>" class="regular-text code">
                        <p class="description" id="api-key-description">(DDI DDD NUMERO)</p>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><label for="dc_sms_config[short_number]">Utilizar Short Number</label></th>
                    <td>
                        <select name="dc_sms_config[short_number]" id="dc_sms_config[short_number]">
                            <option value="s" <?php selected($dc_sms_options['short_number'], 's'); ?>>Sim</option>
                            <option value="n" <?php selected($dc_sms_options['short_number'], 'n'); ?>>Não</option>
                        </select>
                        <p class="description" id="api-key-description">
                            Short number tem um custo maior mas é um serviço mais confiável uma vez que é direto com as operadoras móveis,
                            sem envolver chips de celulares. Além disso, o destinatário verá sempre o mesmo número de
                            remetente (short number), o que pode estabelecer uma identidade para o seu negócio.
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>

        <p class="submit">
            <input type="submit" name="submit" id="submit_jarvis" class="button button-primary" value="Salvar alterações">
        </p>
    </form>
</div>