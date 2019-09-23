<?PHP
class utilities {

    function imageByScreensize($image){
        print('<div class="card skillcard" style="width: 36rem;">
            <div class="card-body">
              <picture>
                <source media="(min-width: 1200px)" srcset="./images/'.$image.'-500.png">
                <source  media="(min-width: 992px)" srcset="./images/'.$image.'-500.png">
                <source  media="(min-width: 768px)" srcset="./images/'.$image.'-400.png">
                <source  media="(min-width: 576px)" srcset="./images/'.$image.'-400.png">
                <source  media="(max-width: 575px)" srcset="./images/'.$image.'-300.png">
                <img src="/images/1006.png" alt="Example Text" style="width:auto;" >
                </picture>
            </div>
          </div>');
    }
}
?>