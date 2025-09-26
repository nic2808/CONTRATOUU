<?php 
$pageTitle = "Sobre Nós";
include 'includes/header.php'; 
?>

<section class="about-hero">
    <div class="container">
        <div class="about-header">
            <h1>Sobre a CONTRATOU</h1>
            <p class="lead">Conectando pessoas através de serviços de qualidade desde 2023</p>
        </div>
    </div>
</section>

<section class="about-content">
    <div class="container">
        <div class="about-grid">
            <div class="about-text">
                <h2>Nossa História</h2>
                <p>A CONTRATOU nasceu da necessidade de criar uma ponte confiável entre pessoas que precisam de serviços e profissionais qualificados que os oferecem. Começamos como uma pequena startup com o objetivo de facilitar a vida das pessoas e dar oportunidades aos trabalhadores autônomos.</p>
                
                <p>Hoje, somos uma das principais plataformas de serviços do Brasil, conectando milhares de clientes a prestadores verificados em todo o país. Nossa missão é simples: tornar a contratação de serviços mais fácil, segura e transparente para todos.</p>
                
                <div class="values">
                    <h3>Nossos Valores</h3>
                    <div class="values-grid">
                        <div class="value-item">
                            <i class="fas fa-shield-alt"></i>
                            <h4>Confiança</h4>
                            <p>Verificamos todos os prestadores para garantir qualidade e segurança</p>
                        </div>
                        
                        <div class="value-item">
                            <i class="fas fa-heart"></i>
                            <h4>Transparência</h4>
                            <p>Avaliações reais e preços claros em todos os serviços</p>
                        </div>
                        
                        <div class="value-item">
                            <i class="fas fa-rocket"></i>
                            <h4>Inovação</h4>
                            <p>Constantemente melhorando nossa plataforma e experiência</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="about-image">
                <img src="https://placeholder-image-service.onrender.com/image/500x600?prompt=Diverse team of professionals working together in modern office environment, collaborative atmosphere with laptops and creative workspace&id=1201f5e8-ebf2-4b95-94df-4083b9177c8b&customer_id=cus_T5DfF9QQ1HAEeT" alt="Equipe diversificada de profissionais trabalhando juntos em ambiente de escritório moderno">
            </div>
        </div>
    </div>
</section>

<section class="stats-section">
    <div class="container">
        <h2>CONTRATOU em Números</h2>
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-number">50.000+</div>
                <div class="stat-label">Clientes Ativos</div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-tools"></i>
                </div>
                <div class="stat-number">10.000+</div>
                <div class="stat-label">Prestadores Verificados</div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <div class="stat-number">100.000+</div>
                <div class="stat-label">Serviços Realizados</div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-star"></i>
                </div>
                <div class="stat-number">4.8/5</div>
                <div class="stat-label">Avaliação Média</div>
            </div>
        </div>
    </div>
</section>

<section class="team-section">
    <div class="container">
        <h2>Nossa Equipe</h2>
        <div class="team-grid">

            <div class="team-card">
                <div class="team-photo">
                    <img src="assets/imagens/camily.jpeg" alt="Retrato profissional da Camily"></div>
                <h4>Camily Peres</h4>   
                <p class="role">Gestão e Organização do Projeto</p>
                <p>Coordenar prazos, dividir tarefas, revisar entregas e garantir que tudo esteja alinhado.</p>
            </div>

            <div class="team-card">
                <div class="team-photo">
                    <img src="assets/imagens/carla.jpeg" alt="Retrato profissional da Ana Carla">
                </div>
                <h4>Ana Carla Vieira</h4>
                <p class="role">Documentação e Requisitos</p>
                <p>Registrar requisitos, relatórios e organizar informações do projeto.</p>
            </div>
            <div class="team-card">
                <div class="team-photo">
                    <img src="assets/imagens/maria.jpeg" alt="Retrato profissional da Maria">
                </div>
                <h4>Maria Antônia Ferreira</h4>
                <p class="role">Design e Protótipo </p>
                <p>Criar protótipos das telas, pensar no visual e na usabilidade da plataforma.</p>
            </div>

             <div class="team-card">
                <div class="team-photo">
                    <img src="assets/imagens/nicole.jpeg" alt="Retrato profissional da Nicole"></div>
                <h4>Nicole Valadão</h4>
                <p class="role">Testes e Qualidade</p>
                <p>Testar o sistema, identificar falhas, sugerir correções e melhorias.</p>
            </div>

             <div class="team-card">
                <div class="team-photo">
                    <img src="assets/imagens/saulo.jpeg" alt="Retrato profissional do Saulo"></div>
                <h4>Saulo Montana</h4>
                <p class="role">Programação Backend</p>
                <p>Implementar regras de negócio (cadastro, login, registros, serviços)</p>
            </div>
            
             <div class="team-card">
                <div class="team-photo">
                    <img src="assets/imagens/tony.jpeg" alt="Retrato profissional do Tony"></div>
                <h4>Tony Ozeias</h4>
                <p class="role">Banco de Dados</p>
                <p>Estruturar cadastros de usuários, serviços, avaliações e pagamentos.</p>
            </div>

             <div class="team-card">
                <div class="team-photo">
                    <img src="assets/imagens/vitor.jpeg" alt="Retrato profissional do Vitor"></div>
                <h4>Vitor Castro</h4>
                <p class="role">Programação Frontend</p>
                <p>Desenvolver a interface do usuário (cadastro, busca, filtros, avaliações).</p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>