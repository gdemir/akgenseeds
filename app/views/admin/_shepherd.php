<!-- shepherd start -->
<!-- source: http://github.hubspot.com/shepherd/docs/welcome/ -->
<link rel="stylesheet" href="/app/assets/css/shepherd-theme-arrows.css" type="text/css"/>
<script type="text/javascript" src="/app/assets/js/shepherd.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {

    var tour;

    tour = new Shepherd.Tour({
      defaults: {
        classes: 'shepherd-theme-arrows',
        scrollTo: false
      }
    });

    tour.addStep('side-menu', {
      title: 'Erişim Menüsü',
      text: 'Erişim Menüsünden istediğiniz işlemi seçebilir ve ona göre işlem yapabilirsiniz',
      attachTo: '#side-menu right',
      classes: 'shepherd shepherd-open shepherd-theme-arrows shepherd-transparent-text',
      buttons: [
      {
        text: 'Çıkış',
        classes: 'shepherd-button-secondary',
        action: function() {
          //completeShepherd();
          return tour.hide();
        }
      }, {
        text: 'İleri',
        action: tour.next,
        classes: 'shepherd-button-example-primary'
      }
      ]
    });

    tour.addStep('main-menu', {
      title: 'Gösterge Paneli',
      text: 'Gösterge Paneli üzerinde Erişim Menüsünden her yapacağınız işlemin dökümünü takip edebilirsiniz',
      attachTo: '#main-menu bottom',
      classes: 'shepherd shepherd-open shepherd-theme-arrows shepherd-transparent-text',
      buttons: [
      {
        text: 'Çıkış',
        classes: 'shepherd-button-secondary',
        action: function() {
          //completeShepherd();
          return tour.hide();
        }
      },
      {
        text: 'Geri',
        classes: 'shepherd-button-example-primary',
        action: tour.back
      },
      {
        text: 'İleri',
        action: tour.next,
        classes: 'shepherd-button-example-primary'
      }
      ]
    });

    tour.addStep('side-menu-toggle', {
      title: 'Erişim Menüsü Saklama Butonu',
      text: 'Erişim Menüsünü saklamak istediğinizde ya da göstermek istediğinizde buraya tıklamanız yeterlidir',
      attachTo: '#side-menu-toggle left',
      classes: 'shepherd shepherd-open shepherd-theme-arrows shepherd-transparent-text',
      buttons: [
      {
        text: 'Çıkış',
        classes: 'shepherd-button-secondary',
        action: function() {
          //completeShepherd();
          return tour.hide();
        }
      },
      {
        text: 'Geri',
        classes: 'shepherd-button-example-primary',
        action: tour.back
      },
      {
        text: 'İleri',
        action: tour.next,
        classes: 'shepherd-button-example-primary'
      }
      ]
    });

    tour.addStep('account', {
      title: 'Kayıt Hızlı Oluşturma Butonu ve Hesap Menüsü',
      text: 'Kayıt Hızlı Oluşturma Butonu Erişim Menüsünündeki listelere hızlıca ekleme yapabilirsiniz, Hesap Menüsü ise profilinizi, şifrenizi güncelleyebilirsiniz',
      attachTo: '#account bottom',
      classes: 'shepherd shepherd-open shepherd-theme-arrows shepherd-transparent-text',
      buttons: [
      {
        text: 'Geri',
        classes: 'shepherd-button-example-primary',
        action: tour.back
      },
      {
        text: 'Tamam',
        classes: 'shepherd-button-secondary',
        action: function() {
          //completeShepherd();
          return tour.hide();
        }
      }
      ]
    });

    tour.start();
  });

</script>
<!-- shepherd end -->