<x-app-layout>
  @include('header.header')
  <main>

  <div class="our-practice-area section-bg " style="text-align: center; overflow: hidden; padding: 50px;">
  <div class="" style="text-align: center">
  <div class="row justify-content-center mb-25" style=>
  <div class="col-xl-12">

  <div class="section-tittle text-center">
  <h2>Les domaines d´expertises</h2>
  </div>
  </div>
  </div>
  <div>
  <div class="" style="text-align: center;">
  <div class="row">

  <!-- Modal -->
  <div class="col-lg-6 col-md-6 col-sm-6 p-0">
      <div class="single-services1 text-center">
        <div class="services-ion">
          <i class="fa-solid fa-building fa-beat-fade fa-2xl" style="color: #ff0000;"></i>
        </div>
        <div class="services-cap">
          <!-- Use JavaScript onclick to trigger the modal -->
          <h5><a href="#" onclick="openPopup()">Difficulté des entreprises</a></h5>
        </div>
      </div>
    </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Difficulté des entreprises</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
          </div>
          <div class="modal-body">
              Notre cabinet d'avocats offre une expertise approfondie en matière de difficulté des entreprises.
              Nous accompagnons les entreprises en crise à chaque étape, de l'analyse préventive à la gestion des
              procédures collectives telles que le redressement judiciaire ou la liquidation. Notre cabinet travaille
              en étroite collaboration avec les clients pour élaborer des stratégies de restructuration efficaces et
              minimiser les impacts négatifs sur les parties prenantes.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div> 
      </div>
    </div>
    
      
  <div class="col-lg-6 col-md-6 col-sm-6 p-0">
  <div class="single-services1 text-center">
  <div class="services-ion">
  <i class="fa-solid fa-scale-balanced fa-beat-fade fa-2xl" style="color: #ff0000;"></i>
  </div>
  <div class="services-cap">
  <h5><a href="#" onclick="openPopup2()">Droit commercial</a></h5>
  </div>
  </div>
  </div>

  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel2">Droit commercial</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
          </div>
          <div class="modal-body">
              Spécialistes en droit commercial, nous fournissons des conseils juridiques et une assistance complète
              pour toutes les activités commerciales. Cela inclut la rédaction et la négociation de contrats, la
              gestion des litiges commerciaux, et la protection des droits de propriété commerciale ou
              intellectuelle. Notre objectif est de sécuriser et d’optimiser les opérations commerciales de nos
              clients, tout en assurant leur conformité avec la législation en vigueur.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
  </div>

  <div class="col-lg-6 col-md-6 col-sm-6 p-0">
  <div class="single-services1 text-center">
  <div class="services-ion">
  <i class="fa-brands fa-vaadin fa-beat-fade fa-2xl" style="color: #ff0000;"></i>
  </div>
  <div class="services-cap">
  <h5><a href="#" onclick="openPopup3()">Droit administratif</a></h5>
  </div>
  </div>
  </div>

  <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel3">Droit administratif</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
          </div>
          <div class="modal-body">
              Notre expertise en droit administratif permet de conseiller et d'assister nos clients dans leurs
              relations avec les administrations publiques. Nous intervenons dans des domaines variés tels que les
              marchés publics, les autorisations administratives, et la responsabilité administrative. Notre cabinet
              veille à protéger les intérêts de nos clients et à résoudre les contentieux avec les autorités
              administratives ainsi que les demandes des indemnités de manière efficace.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
  </div>




  <div class="col-lg-6 col-md-6 col-sm-6 p-0">
  <div class="single-services1 text-center">
  <div class="services-ion">
  <i class="fa-solid fa-business-time fa-beat-fade fa-2xl" style="color: #ff0000;"></i>
  </div>
  <div class="services-cap">
  <h5><a href="#" onclick="openPopup4()">Droit des affaires</a></h5>
  </div>
  </div>
  </div>

  <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel4">Droit des affaires</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
          </div>
          <div class="modal-body">
              Nous offrons des services de conseil et de contentieux en droit des affaires, couvrant tous les aspects
              de la vie de l'entreprise. De la constitution de sociétés à la gestion des opérations courantes, en
              passant par les fusions et acquisitions, nous aidons nos clients à naviguer dans le cadre juridique
              complexe des affaires. Notre approche proactive vise à identifier les opportunités et à prévenir les
              risques juridiques.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
  </div>



  <div class="col-lg-6 col-md-6 col-sm-6 p-0">
  <div class="single-services1 text-center">
  <div class="services-ion">
  <i class="fa-solid fa-person-military-to-person fa-beat-fade fa-2xl" style="color: #ff0000;"></i>
  </div>
  <div class="services-cap">
  <h5><a href="#" onclick="openPopup5()">Droit civil </a></h5>
  </div>
  </div>
  </div>

  <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel5" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel5">Droit civil</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
          </div>
          <div class="modal-body">
              Le droit civil est au cœur de notre pratique, englobant une vaste gamme de services tels que les
              litiges contractuels, la responsabilité civile, et la protection des droits individuels. Nos avocats
              apportent une expertise solide pour défendre les intérêts de nos clients dans toutes les disputes
              civiles, qu’il s’agisse de dommages corporels, de litiges de propriété, ou de questions de succession.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
  </div>


      
  <div class="col-lg-6 col-md-6 col-sm-6 p-0">
  <div class="single-services1 text-center">
  <div class="services-ion">
  <i class="fa-solid fa-sign-hanging fa-beat-fade fa-2xl" style="color: #ff0000;"></i>
  </div>
  <div class="services-cap">
  <h5><a href="#" onclick="openPopup6()">Droit immobilier </a></h5>
  </div>
  </div>
  </div>

  <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel6" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel6">Droit immobilier</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
          </div>
          <div class="modal-body">
              Notre cabinet est spécialisé en droit immobilier, offrant des conseils juridiques sur les transactions
              immobilières, la gestion des baux, et les litiges immobiliers. Nous assistons les promoteurs, les
              investisseurs, les locataires, et les propriétaires dans toutes leurs démarches, en assurant la sécurité
              juridique de leurs opérations immobilières.

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
  </div>


  <div class="col-lg-6 col-md-6 col-sm-6 p-0">
  <div class="single-services1 text-center">
  <div class="services-ion">
  <i class="fa-solid fa-car-burst fa-beat-fade fa-2xl" style="color: #ff0000;"></i>
  </div>
  <div class="services-cap">
  <h5><a href="#" onclick="openPopup7()">Droit des assurances </a></h5>
  </div>
  </div>
  </div>

  <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel7" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel7">Droit des assurances</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
          </div>
          <div class="modal-body">
              Nous fournissons des services juridiques spécialisés en droit des assurances, couvrant la rédaction et
              l’analyse de polices d’assurance, ainsi que la gestion des réclamations et des litiges. Nos avocats
              aident les assurés et les assureurs à comprendre leurs droits et obligations, et à résoudre les
              différends de manière efficace.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
  </div>


  <div class="col-lg-6 col-md-6 col-sm-6 p-0">
  <div class="single-services1 text-center">
  <div class="services-ion">
  <i class="fa-solid fa-people-roof fa-beat-fade fa-2xl" style="color: #ff0000;"></i>
  </div>
  <div class="services-cap">
  <h5><a href="#" onclick="openPopup8()">Droit de la famille et social </a></h5>
  </div>
  </div>
  </div>

  <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel8" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel8">Droit de la famille et social</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
          </div>
          <div class="modal-body">
              Nous offrons un accompagnement personnalisé en droit de la famille, couvrant des sujets tels que le
              divorce, la garde des enfants, les successions, l’héritage, les donations, les mariages mixtes selon le
              code de la famille marocain. Nous travaillons avec sensibilité et discrétion pour résoudre les conflits
              familiaux et protéger les intérêts de nos clients.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
  </div>


  <div class="col-lg-6 col-md-6 col-sm-6 p-0">
  <div class="single-services1 text-center">
  <div class="services-ion">
  <i class="fa-solid fa-coins fa-beat-fade fa-2xl" style="color: #ff0000;"></i>
  </div>
  <div class="services-cap">
  <h5><a href="#" onclick="openPopup9()">Droit finance</a></h5>
  </div>
  </div>
  </div>

  <div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel9" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel9">Droit finance</h5>
            <button type="button" data-bs-dismiss="modal" aria-label="Close">X</button>
          </div>
          <div class="modal-body">
              En droit des finances, nous offrons une expertise pointue sur les questions de financement, de
              régulation financière, et de gestion des risques. Nous conseillons les entreprises sur les structurations
              financières, les investissements, et les opérations bancaires, en veillant à leur conformité avec les
              régulations nationales et internationales.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
  </div>

                      
  <div class="col-lg-6 col-md-6 col-sm-6 p-0">
  <div class="single-services1 text-center">
  <div class="services-ion">
  <i class="fa-solid fa-phone-volume fa-beat-fade fa-2xl" style="color: #ff0000;"></i>
  </div>
  <div class="services-cap">
  <h5><a href="#" onclick="openPopup10()">Arbitrage</a></h5>
  </div>
  </div>
  </div>

  <div class="modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel10" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel10">Arbitrage</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
          </div>
          <div class="modal-body">
              En matière d’arbitrage, nous proposons des services de résolution de conflits alternatifs aux
              procédures judiciaires traditionnelles. Nos avocats agissent en tant qu’arbitres ou représentants dans
              des arbitrages nationaux et internationaux, garantissant des solutions rapides et confidentielles pour
              les différends commerciaux.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
  </div>


  <div class="col-lg-6 col-md-6 col-sm-6 p-0">
  <div class="single-services1 text-center">
  <div class="services-ion">
  <i class="fa-solid fa-briefcase fa-beat-fade fa-2xl" style="color: #ff0000;"></i>
  </div>
  <div class="services-cap">
  <h5><a href="#" onclick="openPopup11()">Création entreprise</a></h5>
  </div>
  </div>
  </div> 

  <div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel11" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel11">Création entreprise</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
          </div>
          <div class="modal-body">
              Notre cabinet accompagne les entrepreneurs dans la création et le développement de leurs
              entreprises. Nous offrons des conseils juridiques complets sur la structuration de l’entreprise, la
              rédaction des statuts, et les démarches administratives nécessaires, assurant une base solide pour la
              réussite de leur projet entrepreneurial.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
  </div>

                              
  </div>
  </div>
  </div>
  </div>
  </div>
          

  </main>
  @include('footer.footer')

  <div id="back-top">
  <a title="Go to Top" href="practice.html#"> <i class="fas fa-level-up-alt"></i></a>
  </div>

</x-app-layout>