<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfólio Profissional</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700&family=Inter:wght@300;400&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        :root {
            --bg-main: #121212;
            --bg-card: #1a1a1a;
            --text-primary: #EAEAEA;
            --text-secondary: #A0A0A0;
            --accent-color: #BEF264; 
            --border-color: #333333;
            --shadow-color: rgba(190, 242, 100, 0.1);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px) scale(0.98); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-main);
            color: var(--text-secondary);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        h1, h2, h3, h4, h5, h6, .card-title, .modal-title, .hero h1 {
            font-family: 'Space Grotesk', sans-serif;
            color: var(--text-primary);
            font-weight: 700;
        }

        
        #menu-toggle {
            position: fixed;
            top: 25px; right: 25px; width: 60px; height: 60px;
            background: var(--bg-card);
            color: var(--text-primary);
            border: 1px solid var(--border-color);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            z-index: 1100; cursor: pointer;
            transition: all 0.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
        }

        
        .hero {
            padding: 140px 0;
            text-align: center;
        }
        .hero h1 { 
            font-size: clamp(2.5rem, 5vw, 4.5rem); 
            color: var(--text-primary);
        }
        .hero .lead { 
            font-size: clamp(1rem, 2vw, 1.25rem); 
            font-weight: 300;
            max-width: 600px;
            margin: auto;
        }

        .section-title { 
            margin-bottom: 60px; 
            font-size: clamp(2rem, 4vw, 3rem); 
            font-weight: 700;
        }
        
     
        .project-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            transition: all 0.3s ease;
            cursor: pointer;
            overflow: hidden;
            opacity: 0; 
            transform: translateY(30px);
        }
        .project-card.is-visible {
            animation: fadeIn 0.6s ease-out forwards;
        }
        .project-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 40px rgba(0,0,0,0.3);
            border-color: var(--accent-color);
        }
        .card-img-wrapper { 
            height: 280px; 
            overflow: hidden;
            position: relative;
        }
        .card-img-top { 
            width: 100%; height: 100%; 
            object-fit: cover; 
            transition: transform 0.4s ease, filter 0.4s ease;
        }
        .project-card:hover .card-img-top { 
            transform: scale(1.1);
            filter: brightness(0.8);
        }
        .card-body { padding: 2rem; }
        .card-title { font-size: 1.75rem; font-weight: 500; }
        
       
        .modal-content {
            background-color: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            color: var(--text-primary);
        }
        .modal-header { border-bottom-color: var(--border-color); }
        .modal-body img { border-radius: 12px; margin-bottom: 1.5rem; }
        .modal-body .project-date { color: var(--accent-color); font-weight: 500; letter-spacing: 0.5px; }
        .btn-close { filter: brightness(0) invert(1); }
        
        
        .form-label { color: var(--text-primary); font-weight: 500; }
        .form-control {
            background-color: var(--bg-main); border: 1px solid var(--border-color);
            padding: 14px; border-radius: 8px; color: var(--text-primary);
        }
        .form-control:focus {
            background-color: #222; border-color: var(--accent-color);
            box-shadow: 0 0 0 0.25rem var(--shadow-color); color: var(--text-primary);
        }
        .btn-custom {
            background-color: var(--accent-color); border: none; color: #121212;
            padding: 14px 20px; border-radius: 8px; transition: all 0.3s ease;
            width: 100%; font-weight: 700; font-size: 1.1rem;
        }
        .btn-custom:hover { background-color: white; transform: scale(1.03); }
        
        .whatsapp-link {
            display: inline-flex; align-items: center; justify-content: center; gap: 10px;
            margin-top: 1rem; padding: 12px 25px; background-color: #25D366;
            color: white; border-radius: 50px; text-decoration: none; font-weight: 500;
            transition: all 0.3s;
        }
        .whatsapp-link:hover { background-color: #128C7E; transform: scale(1.05); color: white; }

        .contact-text { line-height: 1.8; color: var(--text-secondary); }
        .contact-text strong { color: var(--text-primary); }
        
        #main-content { flex-grow: 1; }
        .footer {
            background-color: transparent; color: var(--text-secondary);
            padding: 40px 0; text-align: center;
            border-top: 1px solid var(--border-color); font-size: 0.9rem;
        }
    </style>
</head>
<body>

    
    <div class="dropdown">
        <button id="menu-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-bars fs-5"></i>
        </button>
        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#addProjectModal">Adicionar Projeto</a></li>
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#aboutModal">Sobre & Contato</a></li>
        </ul>
    </div>
    
    
    <div id="main-content">
        <header class="hero">
            <div class="container">
                <h1 class="display-3">Meu Portfólio Digital</h1>
                <p class="lead">Explorando a criatividade através do código e do design.</p>
            </div>
        </header>

        <main class="container py-5">
            <section id="projects">
                <h2 class="section-title text-center">Meus Projetos</h2>
                <div class="row g-5">
                    <?php
                    include 'db_connect.php';
                    $sql = "SELECT id, name, creation_date, description, cover_image FROM projects ORDER BY creation_date DESC";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                    ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="project-card h-100" data-bs-toggle="modal" data-bs-target="#projectDetailsModal" data-name="<?php echo htmlspecialchars($row['name']); ?>" data-date="<?php echo date("d/m/Y", strtotime($row['creation_date'])); ?>" data-description="<?php echo nl2br(htmlspecialchars($row['description'])); ?>" data-image="uploads/<?php echo htmlspecialchars($row['cover_image']); ?>">
                                    <div class="card-img-wrapper"><img src="uploads/<?php echo htmlspecialchars($row['cover_image']); ?>" class="card-img-top" alt="Capa do Projeto"></div>
                                    <div class="card-body"><h5 class="card-title"><?php echo htmlspecialchars($row['name']); ?></h5></div>
                                </div>
                            </div>
                    <?php
                        }
                    } else {
                        echo "<p class='text-center col-12 lead'>Nenhum projeto cadastrado. Use o menu para começar!</p>";
                    }
                    $conn->close();
                    ?>
                </div>
            </section>
        </main>
    </div>

    <footer class="footer">
        <div class="container"><span>© <?php echo date("Y"); ?> Meu Portfólio. Todos os direitos reservados.</span></div>
    </footer>

    
    <div class="modal fade" id="projectDetailsModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header"><h5 class="modal-title"></h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
                <div class="modal-body p-4">
                    <img src="" class="img-fluid modal-project-image" alt="Imagem do Projeto">
                    <h3 class="mt-3 modal-project-name"></h3>
                    <p class="mb-3 project-date"></p>
                    <p class="project-description"></p>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="modal fade" id="addProjectModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header"><h5 class="modal-title">Adicionar Novo Projeto</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
                <div class="modal-body">
                    <form action="add_project.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3"><label class="form-label">Nome</label><input type="text" class="form-control" name="name" required></div>
                        <div class="mb-3"><label class="form-label">Data</label><input type="date" class="form-control" name="creation_date" required></div>
                        <div class="mb-3"><label class="form-label">Descrição</label><textarea class="form-control" name="description" rows="4"></textarea></div>
                        <div class="mb-3"><label class="form-label">Capa</label><input type="file" class="form-control" name="cover_image" required accept="image/png, image/jpeg, image/gif"></div>
                        <button type="submit" class="btn btn-custom mt-2">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="modal fade" id="aboutModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header"><h5 class="modal-title">Sobre & Contato</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
                <div class="modal-body">
                    <p class="mb-4 contact-text">Bem-vindo ao meu portfólio. Aqui apresento os projetos que venho desenvolvendo durante minha jornada como estudante de tecnologia. Estou sempre aprendendo e explorando novas ferramentas para criar soluções criativas.</p>
                    <p class="contact-text"><strong>Email:</strong> projetointegrador@gmail.com</p>
                    <p class="contact-text"><strong>Telefone:</strong> (82) 9999-9999</p>
                    <a href="https://wa.me/55829999999" target="_blank" class="whatsapp-link"><i class="fab fa-whatsapp"></i> Fale no WhatsApp</a>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            
            const projectDetailsModal = document.getElementById('projectDetailsModal');
            projectDetailsModal.addEventListener('show.bs.modal', function(event) {
                const card = event.relatedTarget;
                const name = card.getAttribute('data-name');
                const date = card.getAttribute('data-date');
                const description = card.getAttribute('data-description');
                const image = card.getAttribute('data-image');

                const modalTitle = projectDetailsModal.querySelector('.modal-title');
                const modalName = projectDetailsModal.querySelector('.modal-project-name');
                const modalImage = projectDetailsModal.querySelector('.modal-project-image');
                const modalDate = projectDetailsModal.querySelector('.project-date');
                const modalDescription = projectDetailsModal.querySelector('.project-description');

                modalTitle.textContent = name;
                modalName.textContent = name;
                modalImage.src = image;
                modalDate.textContent = 'Criado em: ' + date;
                modalDescription.innerHTML = description;
            });

            
            const cards = document.querySelectorAll('.project-card');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });
            cards.forEach(card => observer.observe(card));

            
            const menuToggle = document.getElementById('menu-toggle');
            menuToggle.addEventListener('mousemove', (e) => {
                const rect = menuToggle.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;
                menuToggle.style.transform = `translate(${x * 0.2}px, ${y * 0.2}px) scale(1.1)`;
            });
            menuToggle.addEventListener('mouseleave', () => {
                menuToggle.style.transform = 'translate(0,0) scale(1)';
            });
        });
    </script>
</body>
</html>

