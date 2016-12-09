<header class="topo" id="topo">
		<img class="logo" id="logo" src="<?php echo $url; ?>imagens/logo.png" alt="<?php if(isset($nomePag)){echo $nomePag;}else{echo 'Logo Web Mestre';}?>" title="<?php if(isset($nomePag)){echo $nomePag;}else{echo 'Logo Web Mestre';}?>" />
		<img class="escondeMenu" id="logoMenu" src="<?php echo $url; ?>imagens/mobileicon.png" alt="<?php if(isset($nomePag)){echo $nomePag;}else{echo 'Logo Web Mestre';}?>"  title="Mostra Menu" onClick="mostraMenu();"/>
		<nav >
			<ul id="menu">
				<li><a href="<?php echo $url;?>">Home</a></li>
				<li><a href="<?php echo $url;?>produtos/">Produtos</a></li>
				<li><a href="<?php echo $url;?>artigos/">Artigos</a></li>
				<li><a href="<?php echo $url;?>contato/">Contato</a></li>
				

			</ul>
		</nav>
		
		</header>