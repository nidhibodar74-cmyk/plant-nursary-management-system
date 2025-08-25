<?= $this->include('layouts/header') ?>

<h2><center>About Us</center></h2>

<div style="display: flex; gap: 40px; align-items: center; flex-wrap: wrap; padding: 70px" 
    <tr>
        <div style="flex: 1; min-width: 300px;">
    <img src="<?= base_url('uploads/a3.jpg') ?>" alt="About Us" style="width: 70%; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.1);" />
  </div>

  <div style="flex: 1; min-width: 300px;">
    <img src="<?= base_url('uploads/about2.jpg') ?>" alt="About Us" style="width: 70%; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.1);" />
  </div>
    </tr>
   </div>
   
  <div style="flex: 2; min-width: 300px; padding: 50px" >
    <p style="font-size: 20px; line-height: 1.7; color: #444;">
      <strong>Plant Nursing Product Manager</strong> is dedicated to helping plant enthusiasts and businesses manage their plant inventory effectively. 
      We provide tools to track plant care requirements such as sunlight, watering needs, and quantities with ease.
    </p>
    <p style="font-size: 20px; line-height: 1.7; color: #444;">
      Our mission is to empower both small-scale gardeners and large nurseries with digital tools that improve plant care and product visibility.
      With our management system, you can add, update, and monitor the health and status of your plants effortlessly.
    </p>
    <p style="font-size: 20px; line-height: 1.7; color: #444;">
      Whether you're managing a commercial nursery or your personal garden, we're here to help you grow smarter and greener.
    </p>
  </div>

<br><br>

<div style="text-align: center;">
  <h3 style="color: #2c3e50;"></h3>
  <div style="display: flex; justify-content: center; gap: 40px; flex-wrap: wrap; margin-top: 20px;">
    <div>
      <img src="<?= base_url('uploads/t2.jpg') ?>" alt="Team Member 1" style="width: 250px; border-radius: 50%; box-shadow: 0 5px 15px rgba(0,0,0,0.15);" />
      <p style="margin-top: 10px; font-weight: bold;"></p>
      <p style="font-size: 14px; color: #666;"></p>
    </div>
    <div>
      <img src="<?= base_url('uploads/team2.jpg') ?>" alt="Team Member 2" style="width: 250px; border-radius: 50%; box-shadow: 0 5px 15px rgba(0,0,0,0.15);" />
      <p style="margin-top: 10px; font-weight: bold;"></p>
      <p style="font-size: 14px; color: #666;"></p>
    </div>
    <div>
      <img src="<?= base_url('uploads/team3.jpg') ?>" alt="Team Member 3" style="width: 250px; border-radius: 50%; box-shadow: 0 5px 15px rgba(0,0,0,0.15);" />
      <p style="margin-top: 10px; font-weight: bold;"></p>
      <p style="font-size: 14px; color: #666;"></p>
    </div>
  </div>
</div>

<?= $this->include('layouts/footer') ?>
