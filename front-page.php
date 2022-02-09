<?php get_header(); ?>
<!-- <div class="banner ai-c ds-fl">
    <div class="banner-inner mg-at ps-re wc">
        <h2 class="banner-header fc-2 fw-3 ls-n1 mg-b1">Data acquisition made easy.</h2>
        <div class="banner-list mg-b15">
            <div class="ai-c ds-fl fc-wh fs-xs fw-5 ic-p"><i class="fas fa-tools"></i><span>Dedicated Tech Support</span></div>
            <div class="ai-c ds-fl fc-wh fs-xs fw-5 ic-p"><i class="fas fa-users"></i><span>Knowledgable Sales Staff</span></div>
            <div class="ai-c ds-fl fc-wh fs-xs fw-5 ic-p"><i class="fas fa-shipping-fast"></i><span>Fast Shipping</span></div>
        </div>
        <a class="btn bd-3 bg-3 fc-wh td-no" href="/all-products.php">Shop Now</a>
    </div>
</div> -->
<script>
    function openPopular(evt, popularName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" tabActive", "");
    }
    document.getElementById(popularName).style.display = "block";
    evt.currentTarget.className += " tabActive";
  }
  
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();

</script>
<!-- <div style="padding: 1px"></div> -->
<div class="h-2/3 banner ai-c ds-fl ">
    <div class="banner-inner mg-at ps-re wc">
        <h2 class="banner-header fw-3 ls-n1 mg-b1 text-white">Data acquisition made easy.</h2>
        <div class="banner-list mg-b15">
            <div class="ai-c ds-fl fc-wh fs-xs fw-5 ic-p"><i class="fas fa-tools"></i><span class="px-2"> Dedicated Tech Support</span></div>
            <div class="ai-c ds-fl fc-wh fs-xs fw-5 ic-p"><i class="fas fa-users"></i><span class="px-2"> Knowledgable Sales Staff</span></div>
            <div class="ai-c ds-fl fc-wh fs-xs fw-5 ic-p"><i class="fas fa-shipping-fast"></i><span class="px-2"> Fast Shipping</span></div>
        </div>
        <a class="btn bd-3 bg-3 fc-wh td-no" href="#">Shop Now</a>
    </div>
</div>
<div class="category container-1 bg-4">
    <div class="category-grid ds-gr jc-c mg-at wc">
        <div class="rollover-item w-100">
            <div class="rollover-image">
                <a class="fc-wh td-no" href="#">
                    <div class="click-image ai-c bg-wh ds-fl jc-c pd-1">
                        <img width="100%" height="100%" src="wp-content/themes/wp-icpdas-usa/img/icp-das-usa-data-acquisition.jpg" loading="lazy" alt="A product image of a data acquisition module.">
                    </div>
                    <h3 class="click-header ai-c bg-1 ds-fl fc-wh fs-xs fw-4 jc-c pd-1 ps-re ta-c">Remote Data Acquisition</h3>
                    <!-- <div class="click-icon ds-fl jc-c ps-re">
                        <i class="fas fa-plus-circle bg-wh fc-3"></i>
                    </div> -->
                </a>
                <div class="rollover-overlay ds-no pd-1">
                    <h3 class="fc-wh fs-sm mg-b1">Remote Data Acquisition</h3>
                    <ul>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">Remote Data I/O Data Acquisition</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">Racked Based Data Acquisition</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">Data Loggers</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">Data Acquisition Controllers</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">PCI/ ISA Data Acquisition Boards</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">Smart Power Meters</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">Wifi Data Acquisition</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">Sensors</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">View All</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="rollover-item w-100">
            <div class="rollover-image">
                <a class="fc-wh td-no" href="#">
                    <div class="click-image ai-c bg-wh ds-fl jc-c pd-1">
                        <img width="100%" height="100%" src="wp-content/themes/wp-icpdas-usa/img/icp-das-usa-controller.jpg" loading="lazy" alt="A product image of a data acquisition controller.">
                    </div>
                    <h3 class="click-header ai-c bg-1 ds-fl fc-wh fs-xs fw-4 jc-c pd-1 ps-re ta-c">Embedded &amp; Programmable Controllers</h3>
                    <!-- <div class="click-icon ds-fl jc-c ps-re">
                        <i class="fas fa-plus-circle bg-wh fc-3"></i>
                    </div> -->
                </a>
                <div class="rollover-overlay ds-no pd-1">
                    <h3 class="fc-wh fs-sm mg-b1">Controllers</h3>
                    <ul>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">Touchpad Touch Screen Controllers</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">ViewPAC</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">ISaGRAF PACs</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">LinPac Linux</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">LinCON Linux</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">WinCON Windows CE PAC</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">WinPAC Windows CE PAC</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">X-PAC Windows Embedded PAC</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">HMI Controllers</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">View All</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="rollover-item w-100">
            <div class="rollover-image">
                <a class="fc-wh td-no" href="#">
                    <div class="click-image ai-c bg-wh ds-fl jc-c pd-1">
                        <img width="100%" height="100%" src="wp-content/themes/wp-icpdas-usa/img/icp-das-usa-data-communication.jpg" loading="lazy" alt="A product image of a data acquisition gateway.">
                    </div>
                    <h3 class="click-header ai-c bg-1 ds-fl fc-wh fs-xs fw-4 jc-c pd-1 ps-re ta-c">Data Communication</h3>
                    <!-- <div class="click-icon ds-fl jc-c ps-re">
                        <i class="fas fa-plus-circle bg-wh fc-3"></i>
                    </div> -->
                </a>
                <div class="rollover-overlay ds-no pd-1">
                    <h3 class="fc-wh fs-sm mg-b1">Data Communication</h3>
                    <ul>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">Fieldbus Communication</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">Serial Communication</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">Ethernet Communication</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">Modbus Communication</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">Wireless Communication</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">View All</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="rollover-item w-100">
            <div class="rollover-image">
                <a class="fc-wh td-no" href="#">
                    <div class="click-image ai-c bg-wh ds-fl jc-c pd-1">
                        <img width="100%" height="100%" src="wp-content/themes/wp-icpdas-usa/img/icp-das-usa-software.jpg" loading="lazy" alt="A product image of data acquisition software.">
                    </div>
                    <h3 class="click-header ai-c bg-1 ds-fl fc-wh fs-xs fw-4 jc-c pd-1 ps-re ta-c">DAQ Software</h3>
                    <!-- <div class="click-icon ds-fl jc-c ps-re">
                        <i class="fas fa-plus-circle bg-wh fc-3"></i>
                    </div> -->
                </a>
                <div class="rollover-overlay ds-no pd-1">
                    <h3 class="fc-wh fs-sm mg-b1">DAQ Software</h3>
                    <ul>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">Data Logging</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">HMI &amp; SCADA Solutions</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">IEC-61131 Development</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">IoT Management</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">M2M Management</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">OPC Servers</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">Vision Analysis</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="rollover-item w-100">
            <div class="rollover-image">
                <a class="fc-wh td-no" href="#">
                    <div class="click-image ai-c bg-wh ds-fl jc-c pd-1">
                        <img width="100%" height="100%" src="wp-content/themes/wp-icpdas-usa/img/icp-das-usa-ethernet.jpg" loading="lazy" alt="A product image of an ethernet switch.">
                    </div>
                    <h3 class="click-header ai-c bg-1 ds-fl fc-wh fs-xs fw-4 jc-c pd-1 ps-re ta-c">Ethernet Switches</h3>
                    <!-- <div class="click-icon ds-fl jc-c ps-re">
                        <i class="fas fa-plus-circle bg-wh fc-3"></i>
                    </div> -->
                </a>
                <div class="rollover-overlay ds-no pd-1">
                    <h3 class="fc-wh fs-sm mg-b1">Ethernet Switches</h3>
                    <ul>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">Managed Ethernet/Fiber Switches</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">Media Converters</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">Ring Ethernet/Fiber Switch</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">Unmanaged Ethernet Switches</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">Unmanaged Fiber Switches</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">PoE Injector (PSE)/Splitter (PD)</a></li>
                        <li><a class="fc-wh fs-xs fw-5 td-no" href="#">View All</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about container-1">
    <div class="about-inner ai-c mg-at wc">
        <div class="side-gallery h-100 jc-sb">
            <div class="side-image ds-bl mg-b15 w-100">
                <img width="100%" height="100%" src="wp-content/themes/wp-icpdas-usa/img/icp-das-usa-about-1.jpg" loading="lazy" alt="A young man in workwear and a helmet chooses setups on a control panel in a factory shop.">
            </div>
            <div class="side-image ds-fl w-100">
                <img width="100%" height="100%" class="ds-no" src="wp-content/themes/wp-icpdas-usa/img/icp-das-usa-about-2.jpg" loading="lazy" alt="An industrial engineer uses a control panel to program a machine.">
            </div>
            <div class="side-image ds-fl w-100">
                <img width="100%" height="100%" class="ds-no" src="wp-content/themes/wp-icpdas-usa/img/icp-das-usa-about-3.jpg" loading="lazy" alt="An industrial mechanical engineer and a factory worker look at a laptop at a metal lathe industrial manufacturing factory.">
            </div>
        </div>
        <article>
            <h1 class="fc-1 fs-lg fw-3 ls-n1">Welcome to ICP DAS USA</h1>
            <p>ICP DAS USA is a leading manufacturer of industrial automation, control, software, and data acquisition hardware. We offer a broad range of flexible, reliable, and cost-effective solutions designed for the needs of diverse industries such as: energy production (traditional & renewable), manufacturing, packaging, heavy equipment, agriculture, aerospace, oil & gas, and more. Our products include, but are not limited to, M2M and IoT controllers, HMIs, industrial PCs and monitors, protocol converters, and remote data acquisition I/O modules; all of which support a variety of communication protocols such as: Modbus RTU, Modbus TCP, CAN bus, Profibus, Profinet, Ethernet/IP, HART, EtherCAT, DeviceNet, BACnet, Wi-Fi, and Zigbee.</p>
            <p class="mg-b0">Since 2001, we have dedicated ourselves to developing cutting edge industrial data acquisition systems and intelligent communication products that enable integrators, OEMs, and industrial users to implement reliable, cost-effective, and flexible embedded control and DAQ systems. Our success is built on that of our home office, ICP DAS. ICP DAS is headquartered in Taiwan and has built an international reputation as a supplier of high quality industrial data acquisition and control products. From serial communication and automation products, to PLCs and industrial ethernet infrastructure, ICP DAS has been an innovator in the industrial DAQ and embedded control field since 1993. All of our products are manufactured in-house at our headquarters in Hsinchu, Taiwan.</p>
        </article>
    </div>
</div>
<div class="popular container-1 bg-4">
    <div class="popular-inner mg-at wc">
        <h2 class="fc-1 fs-lg fw-3 ls-n1">Popular Product Series</h2>
        <div class="tab-box">
            <div class="tab bg-2 fc-wh">
                <!-- <button class="tablinks btn ai-c bg-2 fc-wh jc-sb w-100" onclick="openPopular(event, 'popular0')" id="defaultOpen">Indusoft SCADA</button>
                <button class="tablinks btn ai-c bg-2 fc-wh jc-sb w-100" onclick="openPopular(event, 'popular1')">The TPD-280 Series</button>
                <button class="tablinks btn ai-c bg-2 fc-wh jc-sb w-100" onclick="openPopular(event, 'popular2')">The M-7000 Series</button>
                <button class="tablinks btn ai-c bg-2 fc-wh jc-sb w-100" onclick="openPopular(event, 'popular3')">The WP-8000 Series</button>
                <button class="tablinks btn ai-c bg-2 fc-wh jc-sb w-100" onclick="openPopular(event, 'popular4')">The tGW-700 Series</button> -->
                <button class="tablinks ai-c bg-2 fc-wh jc-sb w-100" onclick="openPopular(event, 'popular0')" id="defaultOpen">Indusoft SCADA</button>
                <button class="tablinks ai-c bg-2 fc-wh jc-sb w-100" onclick="openPopular(event, 'popular1')">The TPD-280 Series</button>
                <button class="tablinks ai-c bg-2 fc-wh jc-sb w-100" onclick="openPopular(event, 'popular2')">The M-7000 Series</button>
                <button class="tablinks ai-c bg-2 fc-wh jc-sb w-100" onclick="openPopular(event, 'popular3')">The WP-8000 Series</button>
                <button class="tablinks ai-c bg-2 fc-wh jc-sb w-100" onclick="openPopular(event, 'popular4')">The tGW-700 Series</button>
            </div>
            <div id="popular0" class="tabcontent popular-item bg-1 ai-c pd-1 w-100">
                <div class="popular-image ai-c bg-wh ds-fl jc-c mg-b15 pd-1">
                    <img width="200px" height="100%" src="wp-content/themes/wp-icpdas-usa/img/icp-das-usa-indusoft.jpg" loading="lazy" alt="A product image of Indusoft logo.">
                </div>
                <div class="popular-content fd-col jc-c">
                    <h3 class="fc-wh fs-md mg-b1">InduSoft SCADA</h3>
                    <p class="fc-wh">InduSoft is the most sought-after HMI SCADA Solutions software. It is a powerful, integrated collection of automation tools that are needed to develop HMI interfaces.</p>
                    <a class="btn bd-wh fc-wh td-no" href="#">View Series</a>
                </div>
            </div>
            <div id="popular1" class="tabcontent popular-item bg-1 ai-c pd-1 w-100">
                <div class="popular-image ai-c bg-wh ds-fl jc-c mg-b15 pd-1">
                    <img width="200px" height="100%" src="wp-content/themes/wp-icpdas-usa/img/icp-das-usa-tpd-280.jpg" loading="lazy" alt="A product image of a touchpad controller.">
                </div>
                <div class="popular-content fd-col jc-c">
                    <h3 class="fc-wh fs-md mg-b1">The TPD-280 Series</h3>
                    <p class="fc-wh">The TPD-280 series are our most sought-after touch screen controller HMI devices. The controllers come with free Ladder Designer software for PLC users and a C language development environment.</p>
                    <a class="btn bd-wh fc-wh td-no" href="#">View Series</a>
                </div>
            </div>
            <div id="popular2" class="tabcontent popular-item bg-1 ai-c pd-1 w-100">
                <div class="popular-image ai-c bg-wh ds-fl jc-c mg-b15 pd-1">
                    <img width="200px" height="100%" src="wp-content/themes/wp-icpdas-usa/img/icp-das-usa-m-7002.jpg" loading="lazy" alt="A product image of a data acquisition module.">
                </div>
                <div class="popular-content fd-col jc-c">
                    <h3 class="fc-wh fs-md mg-b1">The M-7000 Series</h3>
                    <p class="fc-wh">The M-7000 data acquisition remote I/O modules support Modbus RTU and DCON protocols. They come in a variety of analog and digital configurations and support current, voltage, thermistor, thermocouple, frequency, relay, strain gauge and more!</p>
                    <a class="btn bd-wh fc-wh td-no" href="#">View Series</a>
                </div>
            </div>
            <div id="popular3" class="tabcontent popular-item bg-1 ai-c pd-1 w-100">
                <div class="popular-image ai-c bg-wh ds-fl jc-c mg-b15 pd-1">
                    <img width="200px" height="100%" src="wp-content/themes/wp-icpdas-usa/img/icp-das-usa-wp-8000.jpg" loading="lazy" alt="A product image of a programmable automation controller.">
                </div>
                <div class="popular-content fd-col jc-c">
                    <h3 class="fc-wh fs-md mg-b1">The WP-8000 Series</h3>
                    <p class="fc-wh">The WP-8000 is our highest selling family of rack-mounted Windows-based Programmable Automation Controllers, or WinPACs for short. These tough industrial controllers combine the 24/7 reliability of PLCs with the full feature set of a PC. Our PACs give your engineers the ability to program and develop applications in the Windows based environment they’re most familiar with, saving them the time and effort of having to adapt to the more esoteric environment offered by some industrial controllers. In addition to rich programming and automation features, our WinPACs provide up to 8 hot-swappable I/O slots and offer a wide variety of I/O channel configurations and communication boards for each slot. These controllers easily integrate with your existing control system and, with the option to ship Indusoft pre-installed, can just as easily form the center of a brand new SCADA system.</p>
                    <a class="btn bd-wh fc-wh td-no" href="#">View Series</a>
                </div>
            </div>
            <div id="popular4" class="tabcontent popular-item bg-1 ai-c pd-1 w-100">
                <div class="popular-image ai-c bg-wh ds-fl jc-c mg-b15 pd-1">
                    <img width="200px" height="100%" src="wp-content/themes/wp-icpdas-usa/img/icp-das-usa-data-communication.jpg" loading="lazy" alt="A product image of a data acquisition gateway.">
                </div>
                <div class="popular-content fd-col jc-c">
                    <h3 class="fc-wh fs-md mg-b1">The tGW-700 Series</h3>
                    <p class="fc-wh">Our most popular data communication family, the tGW-700 series, is comprised of Modbus TCP to RTU/ASCII Gateways. This series enables a Modbus TCP/UDP host to communicate with serial Modbus RTU/ASCII devices through an ethernet network and eliminates the cable length limitation of serial communication devices.</p>
                    <a class="btn bd-wh fc-wh td-no" href="#">View Series</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="solutions container-1 bg-wh">
    <div class="solutions-inner mg-at wc">
        <h2 class="fc-1 fs-lg fw-3 ls-n1">Solutions for every industry.</h2>
        <p>ICP DAS USA has over twenty years of experience serving the data acquisition, embedded control, and data communication needs of domestic and international companies, including, but not limited to, those in the following industries:</p>
        <div class="solutions-row ds-fl fd-col">
            <a class="solutions-item rollover-item td-no w-100" href="#">
                <img width="100%" height="100%" class="rollover-image" src="wp-content/themes/wp-icpdas-usa/img/icp-das-usa-building-automation.jpg" loading="lazy" alt="A view of downtown Chicago skyscrapers and highway.">
                <div class="rollover-overlay ai-c jc-c">
                    <h3 class="click-header ai-c bg-1 ds-fl fc-wh fs-sm fw-4 jc-c pd-1 ps-re ta-c">Building Automation</h3>
                </div>
                <div class="click-icon ds-fl jc-c ps-re">
                    <i class="fas fa-plus-circle bg-wh fc-3"></i>
                </div>
            </a>
            <a class="solutions-item rollover-item mg-t1 td-no w-100" href="#">
                <img width="100%" height="100%" class="rollover-image" src="wp-content/themes/wp-icpdas-usa/img/icp-das-usa-factory-automation.jpg" loading="lazy" alt="Three steel factory workers handle a large piece of equipment.">
                <div class="rollover-overlay ai-c jc-c">
                    <h3 class="click-header ai-c bg-1 ds-fl fc-wh fs-sm fw-4 jc-c pd-1 ps-re ta-c">Factory Automation</h3>
                </div>
                <div class="click-icon ds-fl jc-c ps-re">
                    <i class="fas fa-plus-circle bg-wh fc-3"></i>
                </div>
            </a>
            <a class="solutions-item rollover-item mg-t1 td-no w-100" href="#">
                <img width="100%" height="100%" class="rollover-image" src="wp-content/themes/wp-icpdas-usa/img/icp-das-usa-green-energy-and-environment.jpg" loading="lazy" alt="Wind turbines in a grassy field.">
                <div class="rollover-overlay ai-c jc-c">
                    <h3 class="click-header ai-c bg-1 ds-fl fc-wh fs-sm fw-4 jc-c pd-1 ps-re ta-c">Green Energy &amp; Environment</h3>
                </div>
                <div class="click-icon ds-fl jc-c ps-re">
                    <i class="fas fa-plus-circle bg-wh fc-3"></i>
                </div>
            </a>
        </div>
        <div class="solutions-row ds-fl fd-col">
            <a class="solutions-item rollover-item mg-t1 td-no w-100" href="#">
                <img width="100%" height="100%" class="rollover-image" src="wp-content/themes/wp-icpdas-usa/img/icp-das-usa-food-and-beverage.jpg" loading="lazy" alt="Equipment for the distillation of alcoholic beverages.">
                <div class="rollover-overlay ai-c jc-c">
                    <h3 class="click-header ai-c bg-1 ds-fl fc-wh fs-sm fw-4 jc-c pd-1 ps-re ta-c">Food &amp; Beverage</h3>
                </div>
                <div class="click-icon ds-fl jc-c ps-re">
                    <i class="fas fa-plus-circle bg-wh fc-3"></i>
                </div>
            </a>
            <a class="solutions-item rollover-item mg-t1 td-no w-100" href="#">
                <img width="100%" height="100%" class="rollover-image" src="wp-content/themes/wp-icpdas-usa/img/icp-das-usa-laboratories.jpg" loading="lazy" alt="A scientist at work in a laboratory for biomaterials.">
                <div class="rollover-overlay ai-c jc-c">
                    <h3 class="click-header ai-c bg-1 ds-fl fc-wh fs-sm fw-4 jc-c pd-1 ps-re ta-c">Laboratories</h3>
                </div>
                <div class="click-icon ds-fl jc-c ps-re">
                    <i class="fas fa-plus-circle bg-wh fc-3"></i>
                </div>
            </a>
            <a class="solutions-item rollover-item mg-t1 td-no w-100" href="#">
                <img width="100%" height="100%" class="rollover-image" src="wp-content/themes/wp-icpdas-usa/img/icp-das-usa-transportation.jpg" loading="lazy" alt="A plane flies over a truck and cargo ship.">
                <div class="rollover-overlay ai-c jc-c">
                    <h3 class="click-header ai-c bg-1 ds-fl fc-wh fs-sm fw-4 jc-c pd-1 ps-re ta-c">Transportation</h3>
                </div>
                <div class="click-icon ds-fl jc-c ps-re">
                    <i class="fas fa-plus-circle bg-wh fc-3"></i>
                </div>
            </a>
            <a class="solutions-item rollover-item mg-t1 td-no w-100" href="#">
                <img width="100%" height="100%" class="rollover-image" src="wp-content/themes/wp-icpdas-usa/img/icp-das-usa-iiot.jpg" loading="lazy" alt="A graphic showing how a city can be connected by the web of the internet.">
                <div class="rollover-overlay ai-c jc-c">
                    <h3 class="click-header ai-c bg-1 ds-fl fc-wh fs-sm fw-4 jc-c pd-1 ps-re ta-c">IIoT</h3>
                </div>
                <div class="click-icon ds-fl jc-c ps-re">
                    <i class="fas fa-plus-circle bg-wh fc-3"></i>
                </div>
            </a>
        </div>
    </div>
</div>
<style>
    .h-fc {
        height: fit-content;
    }

    @media screen and (min-width: 960px) {
        .story-inner {
            grid-template-columns: 5fr 3fr;
        }
    }
</style>
<script>
    $(document).ready(function() {
        $('#ex1').zoom();
        $('#ex2').zoom();
    });
</script>

<div class="story container-1 bg-4">
    <div class="story-inner ai-c mg-at wc">
        <div class="story-content">
            <div class="story-image side-gallery h-100 jc-sb" style="margin: 10px 0">
                <div class="ds-fl w-100 h-100" style="align-items: center;">
                    <span title="Connect and Manage IoT Devices with New IoTStar Software" style="cursor: -moz-zoom-in;cursor: -webkit-zoom-in; cursor: zoom-in; margin: auto" class="zoom" id="ex1">
                        <img width="100%" height="100%" class="zoomImg" src="wp-content/themes/wp-icpdas-usa/img/icp-das-usa-story-1.jpg" loading="lazy" alt="Connect and Manage IoT Devices with New IoTStar Software" />
                    </span>
                </div>
            </div>
            <h2 class="fc-1 fs-lg fw-3 ls-n1">Application Story</h2>
            <div class="story-list mg-b15">
                <div class="ai-c ds-fl fc-2 fs-xs fw-5 ic-p"><i class="fas fa-wifi"></i><span>Connect and Manage IoT Devices with New IoTStar Software</span></div>
            </div>
            <p><a class="fc-3 fw-5" href="#">IoTstar</a> is a software developed by ICP DAS USA for users to manage and control web based remote monitoring systems in industrial IoT applications. IoTstar can be installed on a private or public IoT cloud system and provides 3 major services for any industrial IoT application needs:</p>
            <ul>
                <li>Controller Remote Access: Status monitoring, system setting, and firmware update</li>
                <li>Sensor Data Collection: Data collected and transferred into cloud’s database</li>
                <li>Sensor Data Visualization: Review data through IoTstar dashboard’s interface</li>
            </ul>
            <p><a class="fc-3 fw-5" href="#">IoTstar</a> is developed for ICP DAS USA’s <a class="fc-3 fw-5" href="#">WISE</a>/<a class="fc-3 fw-5" href="#">PMC</a>/<a class="fc-3 fw-5" href="#">PMD</a> controllers. There is no-programming required for the IoT Cloud system development and the system’s settings can only be completed through web interface.</p>
            <a class="btn bd-3 bg-3 fc-wh td-no" href="#">Read More</a>
        </div>
        <div class="side-gallery h-100 jc-sb ds-no thickbox" style="margin-top: 10px">
            <div class="ds-fl w-100 h-100" style="align-items: center;">
                <a href="<?php echo get_site_url(); ?>/wp-content/themes/wp-icpdas-usa/img/icp-das-usa-story-1.jpg" title="Connect and Manage IoT Devices with New IoTStar Software" style="cursor: -moz-zoom-in;cursor: -webkit-zoom-in; cursor: zoom-in;" class="foobox">
                    <img width="100%" height="100%" class="zoomImg" src="wp-content/themes/wp-icpdas-usa/img/icp-das-usa-story-1.jpg" loading="lazy" alt="Connect and Manage IoT Devices with New IoTStar Software" />
                </a>
            </div>
        </div>
    </div>
</div>
<div class="trio bg-wh">
    <div class="trio-inner bg-wh mg-at ta-c">
        <div class="trio-1 container-1 fc-2 w-100">
            <i class="trio-icon fas fa-laptop-code"></i>
            <h3 class="trio-header fw-7 mg-b15 mg-t1">Free Webinars</h3>
            <div class="trio-content mg-at wc">
                <div class="trio-item mg-b2">
                    <h4><a class="fc-1 fw-5 td-no" href="#" target="_blank">An Engineer’s Guide on How to Make a Data Acquisition System</a></h4>
                    <p class="mg-b0">Date: January 26, 2022</p>
                    <p>Time: 10:00 am PST</p>
                    <a class="btn bd-3 bg-3 fc-wh td-no" href="#" target="_blank">Register Now</a>
                </div>
                <div class="trio-item mg-b2">
                    <h4><a class="fc-1 fw-5 td-no" href="#" target="_blank">Managing The Trickiest Parts of Programming Ladder Logic with Modbus</a></h4>
                    <p class="mg-b0">February 16, 2021 </p>
                    <p>Time: 10:00 am PST</p>
                    <a class="btn bd-3 bg-3 fc-wh td-no" href="#" target="_blank">Register Now</a>
                </div>
                <div class="trio-item mg-b2">
                    <h4><a class="fc-1 fw-5 td-no" href="#" target="_blank">Free Masterclass: Understanding Control & Monitoring Systems</a></h4>
                    <p class="mg-b0">December 8, 2021 </p>
                    <p>Time: 10:00 am PST</p>
                    <a class="btn bd-3 bg-3 fc-wh td-no" href="#" target="_blank">View Recording</a>
                </div>
            </div>
        </div>
        <div class="trio-2 container-1 bg-1 fc-wh w-100">
            <i class="trio-icon far fa-question-circle"></i>
            <h3 class="trio-header fw-7 mg-b15 mg-t1">Contact Us</h3>
            <p class="fc-wh">Our dedicated technical support and sales teams are ready to assist you:</p>
            <div class="trio-content mg-at wc">
                <a class="trio-item fc-wh ds-fl fd-col mg-b2 td-no" href="#">
                    <i class="far fa-comments fs-md"></i>
                    Click to Chat
                </a>
                <a class="trio-item fc-wh ds-fl fd-col mg-b2 td-no" href="#">
                    <i class="fas fa-phone-alt fs-md"></i>
                    (888) 971-9888
                </a>
                <a class="trio-item fc-wh ds-fl fd-col mg-b2 td-no" href="#">
                    <i class="far fa-envelope fs-md"></i>
                    tech@icpdas-usa.com
                </a>
                <a class="trio-item fc-wh ds-fl fd-col mg-b2 td-no" href="#">
                    <i class="far fa-envelope fs-md"></i>
                    sales@icpdas-usa.com
                </a>
                <div class="trio-item fc-wh ds-fl fd-col mg-b2">
                    <i class="far fa-clock fs-md"></i>
                    Monday through Friday<br>
                    8:00 am to 5:00 pm PST
                </div>
                <div><a class="btn bd-wh fc-wh td-no" href="#">Request A Quote</a></div>
            </div>
        </div>
        <div class="trio-3 container-1 fc-2 w-100">
            <i class="trio-icon far fa-list-alt"></i>
            <h3 class="trio-header fw-7 mg-b15 mg-t1">White Papers</h3>
            <div class="trio-content mg-at wc">
                <a class="trio-item ai-c bd bd-1 fc-1 ds-fl jc-sb mg-at mg-b1 pd-1 td-no" href="#">
                    <span>What is DAQ?</span><i class="fas fa-arrow-alt-circle-right fs-md"></i>
                </a>
                <a class="trio-item ai-c bd bd-1 fc-1 ds-fl jc-sb mg-at mg-b1 pd-1 td-no" href="#">
                    <span>What is Predictive Maintenance and Cost effective solutions?</span><i class="fas fa-arrow-alt-circle-right fs-md"></i>
                </a>
                <a class="trio-item ai-c bd bd-1 fc-1 ds-fl jc-sb mg-at mg-b1 pd-1 td-no" href="#">
                    <span>5 Best Practices to Run a Successful Building Automation System</span><i class="fas fa-arrow-alt-circle-right fs-md"></i>
                </a>
                <a class="trio-item ai-c bd bd-1 fc-1 ds-fl jc-sb mg-at mg-b1 pd-1 td-no" href="#">
                    <span>How to detect water leakage in commercial buildings?</span><i class="fas fa-arrow-alt-circle-right fs-md"></i>
                </a>
                <a class="trio-item ai-c bd bd-1 fc-1 ds-fl jc-sb mg-at mg-b1 pd-1 td-no" href="#">
                    <span>A Guide to ICP DAS USA’s IoTStar&nbsp;Program</span><i class="fas fa-arrow-alt-circle-right fs-md"></i>
                </a>
                <a class="trio-item ai-c bd bd-1 fc-1 ds-fl jc-sb mg-at mg-b1 pd-1 td-no" href="#">
                    <span>Wireless Alarm Controllers for Building Automation</span><i class="fas fa-arrow-alt-circle-right fs-md"></i>
                </a>
                <a class="trio-item ai-c bd bd-1 fc-1 ds-fl jc-sb mg-at mg-b1 pd-1 td-no" href="#">
                    <span>Safer Workplaces Air Monitoring</span><i class="fas fa-arrow-alt-circle-right fs-md"></i>
                </a>
                <a class="btn bd-3 bg-3 fc-wh td-no" href="#">View All</a>
            </div>
        </div>
    </div>
</div>
<div class="news container-1 bg-4">
    <div class="news-inner mg-at wc">
        <div class="youtube-link h-100 mg-b15">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/hTMntw79yFY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="news-content">
            <div class="news-subscribe fc-2">
                <h2 class="fc-1 fs-lg fw-3 ls-n1">News from ICP DAS USA</h2>
                <p>Join our mailing list and receive invaluable information about the data acquisition industry:</p>
                <ul class="icon-list">
                    <li><i class="far fa-check-square fc-1 mg-r1"></i>New product launches!</li>
                    <li><i class="far fa-check-square fc-1 mg-r1"></i>Upcoming webinars!</li>
                    <li><i class="far fa-check-square fc-1 mg-r1"></i>Free white papers, application stories, and more!</li>
                    <li><i class="far fa-check-square fc-1 mg-r1"></i>Exciting company &amp; industry news!</li>
                </ul>
                <a class="ai-c btn bd-3 bg-3 ds-fl fc-wh mg-at mg-b15 td-no" href="https://www.icpdas-usa.com/mailchimpNewsletter.php" target="_blank">Subscribe</a>
            </div>
            <div class="news-social">
                <span class="news-social-header fc-2 fw-5 mg-r1">Join us on social media:</span><a class="fc-2 mg-r1" href="https://www.linkedin.com/company/icp-das-usa-inc-" target="_blank"><i class="fab fa-linkedin-in"></i></a><a class="fc-2 mg-r1" href="https://www.youtube.com/user/mariaICP" target="_blank"><i class="fab fa-youtube"></i></a><a class="fc-2 mg-r1" href="https://twitter.com/icpdasusa" target="_blank"><i class="fab fa-twitter"></i></a><a class="fc-2 mg-r1" href="https://www.facebook.com/ICP-DAS-USA-Inc-166144563398936/" target="_blank"><i class="fab fa-facebook-f"></i></a><a class="fc-2" href="https://www.instagram.com/icpdasusa/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- <?php the_content(); ?> -->
<!-- </main> -->
<?php get_footer(); ?>