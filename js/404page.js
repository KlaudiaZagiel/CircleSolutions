    let scene, camera, renderer, starGeo, stars;
    
    function init() {
        scene = new THREE.Scene();
        camera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 1, 1000);
        camera.position.z = 1;
        camera.rotation.x = Math.PI / 2;
    
        function onWindowResize() {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        }
    
        renderer = new THREE.WebGLRenderer();
        renderer.setSize(window.innerWidth, window.innerHeight);
        document.body.appendChild(renderer.domElement);
    
        window.addEventListener('resize', onWindowResize);
    
        starGeo = new THREE.Geometry();
        for (let i = 0; i < 6000; i++) {
            const star = new THREE.Vector3(
                Math.random() * 600 - 300,
                Math.random() * 600 - 300,
                Math.random() * 600 - 300
            );
            star.velocity = 0;
            star.acceleration = 0.02;
            starGeo.vertices.push(star);
        }
        const sprite = new THREE.TextureLoader().load("/CircleSolutions/images/star.png");
        const starMaterial = new THREE.PointsMaterial({
            color: 0xaaaaaa,
            size: 0.7,
            map: sprite
        });
    
        stars = new THREE.Points(starGeo, starMaterial);
        scene.add(stars);
        animate();
    }
    
    function animate() {
        starGeo.vertices.forEach(p => {
            p.velocity += p.acceleration;
            p.y -= p.velocity;
            if (p.y < -200) {
                p.y = 200;
                p.velocity = 0;
            }
        });
        starGeo.verticesNeedUpdate = true;
        stars.rotation.y += 0.002;
        renderer.render(scene, camera);
        requestAnimationFrame(animate);
    }
    
    init();
