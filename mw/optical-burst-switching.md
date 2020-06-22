Optical burst switching (OBS) is an optical networking technique that allows dynamic sub-wavelength switching of data. OBS is viewed as a compromise between the yet unfeasible full optical packet switching (OPS) and the mostly static optical circuit switching (OCS). It differs from these paradigms because OBS control information is sent separately in a reserved optical channel and in advance of the data payload. These control signals can then be processed electronically to allow the timely setup of an optical light path to transport the soon-to-arrive payload. This is known as delayed reservation.


== Purpose ==

The purpose of optical burst switching (OBS) is to dynamically provision sub-wavelength granularity by optimally combining electronics and optics. OBS considers sets of packets with similar properties called bursts. Therefore, OBS granularity is finer than optical circuit switching (OCS). OBS provides more bandwidth flexibility than wavelength routing but requires faster switching and control technology. OBS can be used for realizing dynamic end-to-end all optical communications.



== Method ==

In OBS, packets are aggregated into data bursts at the edge of the network to form the data payload. Various assembling schemes based on time and/or size exist (see burst switching). Edge router architectures have been proposed. OBS features the separation between the control plane and the data plane. A control signal (also termed burst header or control packet) is associated to each data burst. The control signal is transmitted in optical form in a separated wavelength termed the control channel, but signaled out of band and processed electronically at each OBS router, whereas the data burst is transmitted in all optical form from one end to the other end of the network. The data burst can cut through intermediate nodes, and data buffers such as fiber delay lines may be used. In OBS data is transmitted with full transparency to the intermediate nodes in the network. After the burst has passed a router, the router can accept new reservation requests.




== Advantages of OBS over OPS and OCS ==

'''Advantages over OCS'''

More efficient bandwidth utilization – In an OCS system, a lightpath must be set up from source to destination in the optical network. If the data transmission duration is short relative to the set up time, bandwidth may not be efficiently utilized in the OCS system. In comparison, OBS does not require end-to-end lightpath set up, and therefore may offer more efficient bandwidth utilization compared to an OCS system. This is similar to the advantage offered by packet switching over circuit switching.


'''Advantages over OPS'''

Remove throughput limitation – Optical buffer technology has not matured enough to enable low cost manufacturing and widespread use in optical networks. Core optical network nodes are likely to either be unbuffered or have limited buffers. In such networks, delayed reservation schemes such as Just Enough Time (JET) are combined with electronic buffering at edge routers to reserve bandwidth. Using JET can create a throughput limitation in an edge router in an OPS system. This limitation can be overcome by using OBS.

Furthermore, there must be a guardband in the data channel between packets or bursts, so that core optical router data planes have adequate time to switch packets or bursts. If the guardband is large relative to the average packet or burst size, then it can limit data channel throughput. Aggregating packets into bursts can reduce guardband impact on data channel throughput.

Reduce processing requirements and core network energy consumption – A core optical router in an OBS network may face reduced control plane requirements when compared to that in an OPS network, as: A core optical router in an OPS network would have to perform processing operations for every arriving packet, wherelse in an OBS network the router performs processing operations for an arriving burst which contains several packets. Therefore, less processing operations per packet are required in an OBS network core optical router compared to an OPS network. Consequently, the energy consumption and potentially the carbon footprint of a core optical router in an OPS network is likely to be larger than that of an OBS network router for the same amount of data.

This advantage may be offset by the fact that an OBS network edge router is likely to be more complex than an OPS network edge router, due to the possible need for a burst assembly/aggregation and a sorting stage. Consequently, energy consumption at the edge of an OBS network may be higher than in an OPS network.
