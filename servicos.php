<?php 
$pageTitle = "Serviços";
include 'includes/header.php'; 
?>

<section class="services-header">
    <div class="container">
        <h1>Encontre o Serviço Ideal</h1>
        <p>Milhares de prestadores verificados prontos para atender você</p>
        
        <div class="search-filters">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="O que você está procurando?" id="searchInput">
                <button class="btn-search">Buscar</button>
            </div>
            
            <div class="filters-row">
                <select id="categoryFilter">
                    <option value="">Todas as Categorias</option>
                    <option value="casa-jardim">Casa e Jardim</option>
                    <option value="manutencao">Manutenção</option>
                    <option value="reformas">Reformas</option>
                    <option value="tecnologia">Tecnologia</option>
                    <option value="automotivo">Automotivo</option>
                    <option value="beleza">Beleza</option>
                </select>
                
                <select id="locationFilter">
                    <option value="">Todas as Regiões</option>
                    <option value="centro">Centro</option>
                    <option value="triangulo">Triângulo</option>
                    <option value="cristo-rey">Cristo Rey</option>
                    <option value="tamandare">Tamandaré</option>
                    <option value="sao-jose">São José</option>
                    <option value="santo-antonio">Santo Antônio</option>
                    <option value="santa-luzia">Santa Lúzia</option>
                    <option value="serraria">Serraria</option>
                    <option value="10-abril">10 de Abril</option>
                    <option value="fatima">Fátima</option>
                    <option value="liberdade">Liberdade</option>
                </select>
                
                <select id="priceFilter">
                    <option value="">Todos os Preços</option>
                    <option value="0-50">R$ 0 - R$ 50</option>
                    <option value="50-100">R$ 50 - R$ 100</option>
                    <option value="100-200">R$ 100 - R$ 200</option>
                    <option value="200+">Acima de R$ 200</option>
                </select>
                
                <button class="btn btn-secondary" id="clearFilters">Limpar Filtros</button>
            </div>
        </div>
    </div>
</section>

<section class="services-content">
    <div class="container">
        <div class="services-grid" id="servicesGrid">
            <!-- Card 1 -->
            <div class="service-card" data-category="casa-jardim" data-location="centro" data-price="80">
                <div class="service-image">
                    <img src="https://placeholder-image-service.onrender.com/image/300x200?prompt=Professional cleaning service worker with cleaning supplies and equipment in modern residential home&id=1201f5e8-ebf2-4b95-94df-4083b9177c8b&customer_id=cus_T5DfF9QQ1HAEeT" alt="Profissional de limpeza com equipamentos e suprimentos em casa residencial moderna">
                </div>
                <div class="service-content">
                    <div class="service-category">Casa e Jardim</div>
                    <h3>Limpeza Residencial</h3>
                    <div class="provider-info">
                        <img src="https://placeholder-image-service.onrender.com/image/40x40?prompt=Professional female cleaner smiling headshot portrait in uniform&id=1201f5e8-ebf2-4b95-94df-4083b9177c8b&customer_id=cus_T5DfF9QQ1HAEeT" alt="Retrato profissional de faxineira sorrindo em uniforme">
                        <div>
                            <div class="provider-name">Ana Costa</div>
                            <div class="provider-rating">
                                <i class="fas fa-star"></i>
                                <span>4.9</span> (127 avaliações)
                            </div>
                        </div>
                    </div>
                    <p>Limpeza completa de residências com produtos ecológicos. Experiência de 5 anos.</p>
                    <div class="service-details">
                        <span class="price">A partir de R$ 80</span>
                        <span class="location"><i class="fas fa-map-marker-alt"></i> Centro</span>
                    </div>
                    <button class="btn btn-primary btn-full">Contratar Serviço</button>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="service-card" data-category="manutencao" data-location="zona-norte" data-price="120">
                <div class="service-image">
                    <img src="https://placeholder-image-service.onrender.com/image/300x200?prompt=Professional electrician working on electrical panel with tools and safety equipment in residential setting&id=1201f5e8-ebf2-4b95-94df-4083b9177c8b&customer_id=cus_T5DfF9QQ1HAEeT" alt="Eletricista profissional trabalhando em painel elétrico com ferramentas e equipamentos de segurança">
                </div>
                <div class="service-content">
                    <div class="service-category">Manutenção</div>
                    <h3>Serviços Elétricos</h3>
                    <div class="provider-info">
                        <img src="https://placeholder-image-service.onrender.com/image/40x40?prompt=Professional male electrician headshot portrait smiling in work uniform with hard hat&id=1201f5e8-ebf2-4b95-94df-4083b9177c8b&customer_id=cus_T5DfF9QQ1HAEeT" alt="Retrato profissional de eletricista sorrindo em uniforme de trabalho com capacete">
                        <div>
                            <div class="provider-name">Pedro Oliveira</div>
                            <div class="provider-rating">
                                <i class="fas fa-star"></i>
                                <span>4.8</span> (89 avaliações)
                            </div>
                        </div>
                    </div>
                    <p>Instalações e reparos elétricos com garantia. Eletricista certificado.</p>
                    <div class="service-details">
                        <span class="price">A partir de R$ 120</span>
                        <span class="location"><i class="fas fa-map-marker-alt"></i> Cristo Rey</span>
                    </div>
                    <button class="btn btn-primary btn-full">Contratar Serviço</button>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="service-card" data-category="reformas" data-location="zona-sul" data-price="200">
                <div class="service-image">
                    <img src="https://placeholder-image-service.onrender.com/image/300x200?prompt=Professional painter applying paint to interior wall with brushes and painting equipment in home renovation setting&id=1201f5e8-ebf2-4b95-94df-4083b9177c8b&customer_id=cus_T5DfF9QQ1HAEeT" alt="Pintor profissional aplicando tinta na parede interior com pincéis e equipamentos de pintura">
                </div>
                <div class="service-content">
                    <div class="service-category">Reformas</div>
                    <h3>Pintura Residencial</h3>
                    <div class="provider-info">
                        <img src="https://placeholder-image-service.onrender.com/image/40x40?prompt=Professional male painter headshot portrait smiling in work clothes with paint brush&id=1201f5e8-ebf2-4b95-94df-4083b9177c8b&customer_id=cus_T5DfF9QQ1HAEeT" alt="Retrato profissional de pintor sorrindo em roupas de trabalho com pincel">
                        <div>
                            <div class="provider-name">Carlos Santos</div>
                            <div class="provider-rating">
                                <i class="fas fa-star"></i>
                                <span>4.7</span> (156 avaliações)
                            </div>
                        </div>
                    </div>
                    <p>Pintura interna e externa com tintas de alta qualidade. Orçamento gratuito.</p>
                    <div class="service-details">
                        <span class="price">A partir de R$ 200</span>
                        <span class="location"><i class="fas fa-map-marker-alt"></i> Serraria</span>
                    </div>
                    <button class="btn btn-primary btn-full">Contratar Serviço</button>
                </div>
            </div>
            
            <!-- Card 4 -->
            <div class="service-card" data-category="tecnologia" data-location="centro" data-price="60">
                <div class="service-image">
                    <img src="https://placeholder-image-service.onrender.com/image/300x200?prompt=IT technician repairing computer with tools and diagnostic equipment in modern service workspace&id=1201f5e8-ebf2-4b95-94df-4083b9177c8b&customer_id=cus_T5DfF9QQ1HAEeT" alt="Técnico de informática consertando computador com ferramentas e equipamentos de diagnóstico">
                </div>
                <div class="service-content">
                    <div class="service-category">Tecnologia</div>
                    <h3>Assistência Técnica</h3>
                    <div class="provider-info">
                        <img src="https://placeholder-image-service.onrender.com/image/40x40?prompt=Professional IT technician headshot portrait smiling wearing technical support uniform&id=1201f5e8-ebf2-4b95-94df-4083b9177c8b&customer_id=cus_T5DfF9QQ1HAEeT" alt="Retrato profissional de técnico em informática sorrindo em uniforme de suporte técnico">
                        <div>
                            <div class="provider-name">Roberto Silva</div>
                            <div class="provider-rating">
                                <i class="fas fa-star"></i>
                                <span>4.9</span> (203 avaliações)
                            </div>
                        </div>
                    </div>
                    <p>Manutenção de computadores e notebooks. Atendimento domiciliar disponível.</p>
                    <div class="service-details">
                        <span class="price">A partir de R$ 60</span>
                        <span class="location"><i class="fas fa-map-marker-alt"></i> Centro</span>
                    </div>
                    <button class="btn btn-primary btn-full">Contratar Serviço</button>
                </div>
            </div>
            
            <!-- Card 5 -->
            <div class="service-card" data-category="automotivo" data-location="zona-oeste" data-price="150">
                <div class="service-image">
                    <img src="https://placeholder-image-service.onrender.com/image/300x200?prompt=Auto mechanic working under car hood with diagnostic tools in professional garage workshop&id=1201f5e8-ebf2-4b95-94df-4083b9177c8b&customer_id=cus_T5DfF9QQ1HAEeT" alt="Mecânico automotivo trabalhando no motor do carro com ferramentas de diagnóstico">
                </div>
                <div class="service-content">
                    <div class="service-category">Automotivo</div>
                    <h3>Mecânica Geral</h3>
                    <div class="provider-info">
                        <img src="https://placeholder-image-service.onrender.com/image/40x40?prompt=Professional auto mechanic headshot portrait smiling in work uniform with wrench&id=1201f5e8-ebf2-4b95-94df-4083b9177c8b&customer_id=cus_T5DfF9QQ1HAEeT" alt="Retrato profissional de mecânico automotivo sorrindo em uniforme de trabalho com chave inglesa">
                        <div>
                            <div class="provider-name">José Lima</div>
                            <div class="provider-rating">
                                <i class="fas fa-star"></i>
                                <span>4.8</span> (95 avaliações)
                            </div>
                        </div>
                    </div>
                    <p>Revisões, manutenções e reparos automotivos. Oficina equipada e moderna.</p>
                    <div class="service-details">
                        <span class="price">A partir de R$ 150</span>
                        <span class="location"><i class="fas fa-map-marker-alt"></i> Liberdade</span>
                    </div>
                    <button class="btn btn-primary btn-full">Contratar Serviço</button>
                </div>
            </div>
            
            <!-- Card 6 -->
            <div class="service-card" data-category="beleza" data-location="zona-leste" data-price="40">
                <div class="service-image">
                    <img src="https://placeholder-image-service.onrender.com/image/300x200?prompt=Professional hairdresser styling client hair in modern beauty salon with professional equipment&id=1201f5e8-ebf2-4b95-94df-4083b9177c8b&customer_id=cus_T5DfF9QQ1HAEeT" alt="Cabeleireira profissional fazendo penteado em cliente em salão de beleza moderno">
                </div>
                <div class="service-content">
                    <div class="service-category">Beleza</div>
                    <h3>Cabeleireiro</h3>
                    <div class="provider-info">
                        <img src="https://placeholder-image-service.onrender.com/image/40x40?prompt=Professional female hairdresser headshot portrait smiling in salon uniform with styling tools&id=1201f5e8-ebf2-4b95-94df-4083b9177c8b&customer_id=cus_T5DfF9QQ1HAEeT" alt="Retrato profissional de cabeleireira sorrindo em uniforme do salão com ferramentas de estilo">
                        <div>
                            <div class="provider-name">Fernanda Rocha</div>
                            <div class="provider-rating">
                                <i class="fas fa-star"></i>
                                <span>5.0</span> (78 avaliações)
                            </div>
                        </div>
                    </div>
                    <p>Cortes, coloração e tratamentos capilares. Atendimento domiciliar disponível.</p>
                    <div class="service-details">
                        <span class="price">A partir de R$ 40</span>
                        <span class="location"><i class="fas fa-map-marker-alt"></i> Tamandaré</span>
                    </div>
                    <button class="btn btn-primary btn-full">Contratar Serviço</button>
                </div>
            </div>
        </div>
        
        
    </div>
</section>

<script>
// Função de busca simples
document.getElementById('searchInput').addEventListener('input', function() {
    filterServices();
});

// Event listeners para os filtros
document.getElementById('categoryFilter').addEventListener('change', filterServices);
document.getElementById('locationFilter').addEventListener('change', filterServices);
document.getElementById('priceFilter').addEventListener('change', filterServices);

// Limpar filtros
document.getElementById('clearFilters').addEventListener('click', function() {
    document.getElementById('searchInput').value = '';
    document.getElementById('categoryFilter').value = '';
    document.getElementById('locationFilter').value = '';
    document.getElementById('priceFilter').value = '';
    filterServices();
});

function filterServices() {
    const searchTerm = document.getElementById('searchInput').value.toLowerCase();
    const categoryFilter = document.getElementById('categoryFilter').value;
    const locationFilter = document.getElementById('locationFilter').value;
    const priceFilter = document.getElementById('priceFilter').value;
    
    const serviceCards = document.querySelectorAll('.service-card');
    
    serviceCards.forEach(card => {
        const title = card.querySelector('h3').textContent.toLowerCase();
        const description = card.querySelector('p').textContent.toLowerCase();
        const category = card.dataset.category;
        const location = card.dataset.location;
        const price = parseInt(card.dataset.price);
        
        let showCard = true;
        
        // Filtro de busca
        if (searchTerm && !title.includes(searchTerm) && !description.includes(searchTerm)) {
            showCard = false;
        }
        
        // Filtro de categoria
        if (categoryFilter && category !== categoryFilter) {
            showCard = false;
        }
        
        // Filtro de localização
        if (locationFilter && location !== locationFilter) {
            showCard = false;
        }
        
        // Filtro de preço
        if (priceFilter) {
            const [min, max] = priceFilter.split('-').map(p => p.replace('+', ''));
            if (max) {
                if (price < parseInt(min) || price > parseInt(max)) {
                    showCard = false;
                }
            } else {
                if (price < parseInt(min)) {
                    showCard = false;
                }
            }
        }
        
        card.style.display = showCard ? 'block' : 'none';
    });
}
</script>

<?php include 'includes/footer.php'; ?>