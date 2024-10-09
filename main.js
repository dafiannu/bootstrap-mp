// Default Display At Home, (agar laman selain Home tidak ditampilkan)
document.getElementById('card').style.display = 'none';
document.getElementById('servis').style.display = 'none';

// Remove Home Page & Replace it With Another Page
document.getElementById('pj').addEventListener('click', function() {
    document.getElementById('c-fluid').style.display = 'none';
    document.getElementById('servis').style.display = 'none';
    
    const card = document.getElementById('card');
    card.style.display = 'block';

    const hm = document.getElementById('hm');
    hm.classList.remove('active'); 
    
    const ms = document.getElementById('ms');
    ms.classList.remove('active');
    
    const pj = document.getElementById('pj');
    pj.classList.add('active');
})

document.getElementById('ms').addEventListener('click', function() {
    document.getElementById('c-fluid').style.display = 'none';
    document.getElementById('card').style.display = 'none';
    
    const servis = document.getElementById('servis');
    servis.style.display = 'block';

    const hm = document.getElementById('hm');
    hm.classList.remove('active');  
    
    const pj = document.getElementById('pj');
    pj.classList.remove('active')
    
    const ms = document.getElementById('ms');
    ms.classList.add('active');
})

// Pengambilan Data Input Dari Form
document.getElementById('btn-submit').addEventListener('click', dataset);
function dataset() {
    const inpEmail = document.getElementById('input-email').value;
    const inpServ = document.getElementById('inputGroupSelect01').value;
    const inpDate = document.getElementById('date').value;
    const inpDesc = document.getElementById('text-area').value;
    // alert(inpEmail);
    // alert(inpServ);
    // alert(inpDate);
    // alert(inpDesc);
    
}

// Pengambilan Data Terbaru Dari Pop-Up
document.getElementById('add-edit').addEventListener('click', function() {
    const dataEdit = document.getElementById('popup-desc').value;
        
    // test berjalan
    console.log(dataEdit);
})

// Pembuatan Tabel Input

