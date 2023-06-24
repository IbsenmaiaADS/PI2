# Virtual Hosts - trecho drive ifsul gravatai
# para ser inserido no fim do arquivo httpd-vhosts.conf

<VirtualHost pessoal>
    DocumentRoot "${ibsenmaia}/ownCloud/PESSOAL/htdocs/"
    ServerName pessoal
    ErrorLog "${TEMP}/${COMPUTERNAME}-error.log"
    CustomLog "${TEMP}/${COMPUTERNAME}-access.log" combined
    <Directory "${ibsenmaia}/ownCloud/PESSOAL/htdocs/">
        # AllowOverride All      # Deprecated
        # Order Allow,Deny       # Deprecated
        # Allow from all         # Deprecated

        # --New way of doing it
		Options All
		AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>