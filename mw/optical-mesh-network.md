An Optical mesh network is a type of optical telecommunications network employing wired fiber-optic communication or wireless free-space optical communication in a mesh network architecture.

Most optical mesh networks use fiber-optic communication and are operated by internet service providers in metropolitan and regional but also national and international scenarios. They are faster and less error prone than other network architectures and support backup and recovery plans for established networks in case of any disaster, damage or failure. Currently planned satellite constellations aim to establish optical mesh networks in space by using wireless laser communication.


== History of transport networks ==

Transport networks, the underlying optical fiber-based layer of telecommunications networks, have evolved from Digital cross connect system (DCS)-based mesh architectures in the 1980s, to SONET/SDH (Synchronous Optical Networking/Synchronous Digital Hierarchy) ring architectures in the 1990s. In DCS-based mesh architectures, telecommunications carriers deployed restoration systems for DS3 circuits such as AT&T FASTAR (FAST Automatic Restoration) and MCI Real Time Restoration (RTR), restoring circuits in minutes after a network failure. In SONET/SDH rings, carriers implemented ring protection such as SONET Unidirectional Path Switched Ring (UPSR) (also called Sub-Network Connection Protection (SCNP) in SDH networks) or SONET Bidirectional Line Switched Ring (BLSR) (also called Multiplex Section - Shared Protection Ring (MS-SPRing) in SDH networks), protecting against and recovering from a network failure in 50 ms or less, a significant improvement over the recovery time supported in DCS-based mesh restoration, and a key driver for the deployment of SONET/SDH ring-based protection.

There have been attempts at improving and/or evolving traditional ring architectures to overcome some of its limitations, with trans-oceanic ring architecture (defined in ITU-T Rec. G.841), "P-cycles" protection, next-generation SONET/SDH equipment that can handle multiple rings, or have the ability to not close the working or protection ring side, or to share protection capacity among rings (e.g., with Virtual Line Switched Ring (VLSR)).

Technological advancements in optical transport switches  in the first decade of the 21st century, along with continuous deployment of dense wavelength-division multiplexing (DWDM) systems, have led telecommunications service providers to replace their SONET ring architectures by mesh-based architectures for new traffic. The new optical mesh networks support the same fast recovery previously available in ring networks while achieving better capacity efficiency and resulting in lower capital cost. Such fast recovery (in the tens to hundreds of milliseconds) in case of failures (e.g., network link or node failure) is achieved through the intelligence embedded in these new optical transport equipment, which allows recovery to be automatic and handled within the network itself as part of the network control plane, without relying on an external network management system.


== Optical mesh networks ==

Optical mesh networks refer to transport networks that are built directly off the mesh-like fiber infrastructure deployed in metropolitan, regional, national, or international (e.g., trans-oceanic) areas by deploying optical transport equipment that are capable of switching traffic (at the wavelength or sub-wavelength level) from an incoming fiber to an outgoing fiber. In addition to switching wavelengths, the equipment is typically also able to multiplex lower speed traffic into wavelengths for transport, and to groom traffic (as long as the equipment is so-called opaque - see subsection on transparency). Finally, these equipment also provide for the recovery of traffic in case of a network failure. As most of the transport networks evolve toward mesh topologies utilizing intelligent network elements (optical cross-connects or optical switches ) for provisioning and recovery of services, new approaches have been developed for the design, deployment, operations and management of mesh optical networks.

Optical switches build by companies such as Sycamore and Ciena (with STS-1 granularity of switching) and Tellium (with STS-48 granularity of switching) have been deployed in operational mesh networks. Calient has built all-optical switches based on 3D MEMS technology.

Optical mesh networks today not only provide trunking capacity to higher-layer networks, such as inter-router or inter-switch connectivity in an IP, MPLS, or Ethernet-centric packet infrastructure, but also support efficient routing and fast failure recovery of high-bandwidth point-to-point Ethernet and SONET/SDH services.

Several planned satellite constellations such as SpaceX's Starlink intended for global internet provisioning aim to establish optical mesh networks in space. The constellations consisting of several hundred to thousand satellites will use laser communication for high-throughput optical inter-satellite links. The interconnected network architecture allows for direct routing of user data from satellite to satellite and enables seamless network management and continuity of service.


== Recovery in optical mesh networks ==

Optical mesh networks support the establishment of circuit-mode connection-oriented services. Multiple recovery mechanisms that provide different levels of protection  or restoration  against different failure modes are available in mesh networks. Channel-, link-, segment- and path- protection are the most common protection schemes. P-cycles is another type of protection that leverages and extends ring-based protection. Restorationis another recovery method that can work on its own or complement faster protection schemes in case of multiple failures.

In path-protected mesh networks, some connections can be unprotected; others can be protected against single or multiple failures in various ways. A connection can be protected against a single failure by defining a backup path, diverse from the primary path taken by the connection over the mesh network. The backup path and associated resources can be dedicated to the connection (Dedicated Backup Path Protection, aka dedicated (1+1) path protection, Subnetwork Connection Protection (SNCP) in SDH networks, or UPSR in SONET ring networks), or shared among multiple connections (Shared Backup Path Protection), typically ones whose primary paths are not likely to fail at the same time, thereby avoiding contention for the shared resources in case of a single link or node failure. A number of other protection schemes such as the use of pre-emptible paths, or only partially diverse backup paths, can be implemented. Finally, multiple diverse routes can be designed so that a connection has multiple recovery routes and can recover even after multiple failures (examples of mesh networks across the Atlantic and Pacific oceans ).


== Transparency ==

Traditional transport networks are made of optical fiber-based links between telecommunications offices, where multiple wavelengths are multiplexed to increase the capacity of the fiber. The wavelengths are terminated on electronic devices called transponders, undergoing an optical-to-electrical conversion for signal Reamplification, Reshaping, and Retiming (3R). Inside a telecommunications office, the signals are then handled to and switched by a transport switch (aka optical cross-connect or optical switch) and either are dropped at that office, or directed to an outgoing fiber link where they are again carried as wavelengths multiplexed into that fiber link towards the next telecommunications office. The act of going through Optical-Electrical-Optical (O-E-O) conversion through a telecommunications office causes the network to be considered opaque. When the incoming wavelengths do not undergo an optical-to-electrical conversion and are switched through a telecommunications office in the optical domain using all-optical switches (also called photonic cross-connect, optical add-drop multiplexer, or Reconfigurable Optical Add-Drop Multiplexer (ROADM) systems), the network is considered to be transparent. Hybrid schemes that leverage optical bypasses and provide limited O-E-O conversions at key locations across the network, are referred to as translucent networks.

ROADM-based transparent optical mesh networks have been deployed in metropolitan and regional networks since the mid-2000s. In the early 2010s, operational long distance networks still tend to remain opaque, as there are transmission limitations and impairments that prevent the extension of transparency beyond a certain point.


== Routing in optical mesh networks ==

Routing is a key control and operational aspect of optical mesh networks. In transparent or all-optical networks, routing of connections is tightly linked to the wavelength selection and assignment process (so-called Routing and Wavelength Assignment, or "RWA"). This is due to the fact that the connection remains on the same wavelength from end-to-end throughout the network (sometimes referred to as wavelength continuity constraint, in the absence of devices that can translate between wavelengths in the optical domain). In an opaque network, the routing problem is one of finding a primary path for a connection and if protection is needed, a backup path diverse from the primary path. Wavelengths are used on each link independently of each other's. Several algorithms can be used and combined to determine a primary path and a diverse backup path (with or without sharing of resource along the backup path) for a connection or service, such as: shortest path, including Dijkstra's algorithm; k-shortest path, such as Yen's algorithm; edge and node-diverse or disjoint routing, including Suurballe's algorithm; and numerous heuristics. In general, however, the problems of optimal routing for Dedicated Backup Path Protection with arbitrary Shared Risk Link Groups (SRLGs), and for Shared Backup Path Protection are NP-complete.


== Applications ==

The deployment of optical mesh networks is enabling new services and applications for service providers to offer their customers, such as

Quality of Service (QoS) protection, allowing services with different levels of protection: pre-emptable, unprotected, protected with guaranteed recovery against single link or single node failure, protected against multiple failures (through a combination of protection and restoration)

Dynamic services such as Bandwidth-on-Demand (BoD), Just-In-Time (JIT) bandwidth, bandwidth scheduling, and bandwidth brokering

Optical virtual private networks

Multicast lightpaths

It also supports new network paradigms such as


IP-over-optical network architectures


== Related network architectures ==

Mesh networking in general and wireless mesh networking in particular.
