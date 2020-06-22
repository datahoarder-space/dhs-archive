Opentracker is a free (licensed as beerware) BitTorrent peer tracker software (a special kind of HTTP or UDP server software) that is designed to be fast and to have a low consumption of system resources.


== Features ==

Several instances of opentracker may be run in a cluster, with all of them synchronizing with each other. Besides the Hypertext Transfer Protocol (HTTP) opentracker may also be connected to via User Datagram Protocol (UDP), which creates less than half of the tracker traffic HTTP creates. It supports IPv6, gzip compression of full scrapes, and blacklists of torrents. Because there have already been cases of people being accused of copyright violation by the fact that their IP address was listed on a BitTorrent tracker, opentracker may mix in random IP address numbers for the purpose of plausible deniability.


== Technology ==

It runs completely in RAM, accounting for much of its speed advantage over other tracker software. It is written in C and based on the library libowfat that manages network connections. For some new functionality like the UDP support with IPv6 or the syncing of several instances of BitTorrent tracker software, new extensions to the BitTorrent protocol were made.


== Adoption ==

The world's largest tracker at The Pirate Bay switched from their selfmade software Hypercube to opentracker in the end of 2007.

The Norwegian Broadcasting Corporation uses it to distribute their own TV shows.
