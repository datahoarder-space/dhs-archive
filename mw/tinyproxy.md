Tinyproxy is a HTTP proxy server daemon for POSIX operating systems. Designed to be fast and small, it is useful when an HTTP/HTTPS proxy is required, but the system resources for a larger proxy are unavailable. Because of this it has been put to uses such as a tether on the iPhone, and on the OpenWrt.

Tinyproxy is primarily designed to run on Unix-like systems. Released under the GNU General Public License, Tinyproxy is free software and has been developed for a number of years. It is currently being maintained on GitHub as a publicly accessible project. Ohloh analyses it to be a project with "mature, well-established codebase and increasing year-over-year development activity."


== Features ==

Anonymous mode: Allows specification of individual HTTP headers that should be allowed through, and which should be blocked.

HTTPS support: Tinyproxy allows forwarding of HTTPS connections without modifying traffic in any way.

Remote monitoring: Tinyproxy can be monitored remotely to view logs and access details.

Load average monitoring: Tinyproxy can be configured to refuse connections after the server load reaches a certain point.

Access control: Tinyproxy can be configured to only allow connections from certain subnets or IP addresses.

Secure: With some configuration, Tinyproxy can be made to run without any special privileges, thus minimizing the chance of system compromise. Furthermore, it was designed with an eye towards preventing buffer overflows.

Small footprint: Tinyproxy requires very little in the way of system resources - the memory footprint tends to be around 2MB with glibc, and the CPU load increases linearly with the number of simultaneous connections (depending on the speed of the connection). Therefore, Tinyproxy can be run on a spare, older machine without any impact on performance.

URL based filtering: Tinyproxy allows domain and URL-based black- and whitelisting.

Transparent proxying: Tinyproxy supports being configured as a transparent proxy, so that a proxy can be used without requiring any client-side configuration.

Proxy chaining: Tinyproxy can use an upstream proxy server for outbound connections, instead of direct connections to the target server, creating a so-called proxy chain.


== Availability in OS distributions ==


Tinyproxy packages are available for various Linux distributions such as openSUSE, Debian, Fedora, FreeBSD, Gentoo Linux, OpenBSD, Ubuntu, and OpenWrt. Source code is also available.
