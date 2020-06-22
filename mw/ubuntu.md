Ubuntu is a free and open source operating system and Linux distribution based on Debian. Ubuntu is offered in three official editions: Ubuntu Desktop for personal computers, Ubuntu Server for servers and the cloud, and Ubuntu Core for Internet of things devices. New releases of Ubuntu occur every six months, while long-term support (LTS) releases occur every two years.

Ubuntu is produced by Canonical and the community in a meritocratic governance model Canonical provides free guaranteed security updates and support for each Ubuntu release, starting from the release date and until the release reaches its predesignated end-of-life (EOL) date. Canonical generates revenue through the sale of premium services related to Ubuntu.

Ubuntu is named after the Southern African philosophy of ubuntu (literally, 'human-ness'), which Canonical suggests can be loosely translated as "humanity to others" or "I am what I am because of who we all are".

Ubuntu is the most popular operating system for the cloud, and is the reference operating system for OpenStack.
==History and development process==

Ubuntu is built on Debian's architecture and infrastructure, and comprises Linux server, desktop and discontinued phone and tablet operating system versions. Ubuntu releases updated versions predictably every six months, and each release receives free support for nine months (eighteen months prior to 13.04) with security fixes, high-impact bug fixes and conservative, substantially beneficial low-risk bug fixes.The first release was in October 2004.

Current long-term support (LTS) releases are supported for five years, and are released every two years. LTS releases get regular point releases with support for new hardware and integration of all the updates published in that series to date.

Ubuntu packages are based on packages from Debian's unstable branch. Both distributions use Debian's deb package format and package management tools (e.g. APT and Ubuntu Software). Debian and Ubuntu packages are not necessarily binary compatible with each other, however; packages may need to be rebuilt from source to be used in Ubuntu. Many Ubuntu developers are also maintainers of key packages within Debian. Ubuntu cooperates with Debian by pushing changes back to Debian, although there has been criticism that this does not happen often enough. Ian Murdock, the founder of Debian, had expressed concern about Ubuntu packages potentially diverging too far from Debian to remain compatible. Before release, packages are imported from Debian unstable continuously and merged with Ubuntu-specific modifications. One month before release, imports are frozen, and packagers then work to ensure that the frozen features interoperate well together.

Ubuntu is currently funded by Canonical Ltd. On 8 July 2005, Mark Shuttleworth and Canonical announced the creation of the Ubuntu Foundation and provided an initial funding of US$10 million. The purpose of the foundation is to ensure the support and development for all future versions of Ubuntu. Mark Shuttleworth describes the foundation goal as to ensure the continuity of the Ubuntu project.

On 12 March 2009, Ubuntu announced developer support for third-party cloud management platforms, such as those used at Amazon EC2.

Since Ubuntu 17.10, GNOME 3 is the default GUI for Ubuntu Desktop, while Unity is still the default in older versions, including all current LTS versions. However, a community-driven fork of Unity 8, called Yunit, has been created to continue the development of Unity. Shuttleworth wrote on 8 April 2017, "We will invest in Ubuntu GNOME with the intent of delivering a fantastic all-GNOME desktop. We're helping the Ubuntu GNOME team, not creating something different or competitive with that effort. While I am passionate about the design ideas in Unity, and hope GNOME may be more open to them now, I think we should respect the GNOME design leadership by delivering GNOME the way GNOME wants it delivered. Our role in that, as usual, will be to make sure that upgrades, integration, security, performance and the full experience are fantastic." Shuttleworth also mentioned that Canonical will cease development for Ubuntu Phone, Tablet, and convergence.

==Features==

A default installation of Ubuntu contains a wide range of software that includes LibreOffice, Firefox, Thunderbird, Transmission, and several lightweight games such as Sudoku and chess. Many additional software packages are accessible from the built in Ubuntu Software (previously Ubuntu Software Center) as well as any other APT-based package management tools. Many additional software packages that are no longer installed by default, such as Evolution, GIMP, Pidgin, and Synaptic, are still accessible in the repositories still installable by the main tool or by any other APT-based package management tool. Cross-distribution snap packages and flatpaks are also available, that both allow installing software, such as some of Microsoft's software, in most of the major Linux operating systems (such as any currently supported Ubuntu version and in Fedora).

Ubuntu operates under the GNU General Public License (GPL) and all of the application software installed by default is free software. In addition, Ubuntu installs some hardware drivers that are available only in binary format, but such packages are clearly marked in the restricted component.

==Security==

Ubuntu's goal is to be secure "out-of-the box". By default, the user's programs run with low privileges and cannot corrupt the operating system or other users' files. For increased security, the sudo tool is used to assign temporary privileges for performing administrative tasks, which allows the root account to remain locked and helps prevent inexperienced users from inadvertently making catastrophic system changes or opening security holes. PolicyKit is also being widely implemented into the desktop. Most network ports are closed by default to prevent hacking. A built-in firewall allows end-users who install network servers to control access. A GUI (GUI for Uncomplicated Firewall) is available to configure it. Ubuntu compiles its packages using GCC features such as PIE and buffer overflow protection to harden its software. These extra features greatly increase security at the performance expense of 1% in 32-bit and 0.01% in 64-bit.
Ubuntu also supports full disk encryption as well as encryption of the home and Private directories.

==Installation==

The system requirements vary among Ubuntu products. For the Ubuntu desktop release 16.04 LTS, a PC with at least 2 GHz dual-core processor, 2 GB of RAM and 25 GB of free disk space is recommended. For less powerful computers, there are other Ubuntu distributions such as Lubuntu and Xubuntu. Ubuntu supports the ARM architecture. Ubuntu is also available on Power, older PowerPC architecture was at one point unofficial supported, and now newer Power Architecture CPUs (POWER8) are supported.

Live images are the typical way for users to assess and subsequently install Ubuntu. These can be downloaded as a disk image (.iso) and subsequently burnt to a DVD and booted, or run via UNetbootin directly from a USB drive (making, respectively, a live DVD or live USB medium). Running Ubuntu in this way is typically slower than running it from a hard drive, but does not alter the computer unless specifically instructed by the user. If the user chooses to boot the live image rather than execute an installer at boot time, there is still the option to then use an installer called Ubiquity to install Ubuntu once booted into the live environment. Disk images of all current and past versions are available for download at the Ubuntu web site. Various third-party programs such as remastersys and Reconstructor are available to create customized copies of the Ubuntu Live DVDs (or CDs). "Minimal CDs" are available (for server use) that fit on a CD.

Additionally, USB flash drive installations can be used to boot Ubuntu and Kubuntu in a way that allows permanent saving of user settings and portability of the USB-installed system between physical machines (however, the computers' BIOS must support booting from USB). In newer versions of Ubuntu, the Ubuntu Live USB creator can be used to install Ubuntu on a USB drive (with or without a live CD or DVD). Creating a bootable USB drive with persistence is as simple as dragging a slider to determine how much space to reserve for persistence; for this, Ubuntu employs casper

The desktop edition can also be installed using the Netboot image (a.k.a. netboot tarball) which uses the debian-installer and allows certain specialist installations of Ubuntu: setting up automated deployments, upgrading from older installations without network access, LVM or RAID partitioning, installs on systems with less than about 256 MB of RAM (although low-memory systems may not be able to run a full desktop environment reasonably).

==Package Classification and Support==

Ubuntu divides most software into four domains to reflect differences in licensing and the degree of support available. Some unsupported applications receive updates from community members, but not from Canonical Ltd.

Free software includes software that has met the Ubuntu licensing requirements, which roughly correspond to the Debian Free Software Guidelines. Exceptions, however, include firmware and fonts, in the Main category, because although they are not allowed to be modified, their distribution is otherwise unencumbered.

Non-free software is usually unsupported (Multiverse), but some exceptions are made for important non-free software. Supported non-free software includes device drivers that can be used to run Ubuntu on some current hardware, such as binary-only graphics card drivers. The level of support in the Restricted category is more limited than that of Main, because the developers may not have access to the source code. It is intended that Main and Restricted should contain all software needed for a complete desktop environment. Alternative programs for the same tasks and programs for specialized applications are placed in the Universe and Multiverse categories.

In addition to the above, in which the software does not receive new features after an initial release, Ubuntu Backports is an officially recognized repository for backporting newer software from later versions of Ubuntu. The repository is not comprehensive; it consists primarily of user-requested packages, which are approved if they meet quality guidelines. Backports receives no support at all from Canonical, and is entirely community-maintained.

The -updates repository provides stable release updates (SRU) of Ubuntu and are generally installed through update-manager. Each release is given its own -updates repository (e.g. intrepid-updates). The repository is supported by Canonical Ltd. for packages in main and restricted, and by the community for packages in universe and multiverse. All updates to the repository must meet certain requirements and go through the -proposed repository before being made available to the public. Updates are scheduled to be available until the end of life for the release.

In addition to the -updates repository, the unstable -proposed repository contains uploads which must be confirmed before being copied into -updates. All updates must go through this process to ensure that the patch does truly fix the bug and there is no risk of regression. Updates in -proposed are confirmed by either Canonical or members of the community.

Canonical's partner repository lets vendors of proprietary software deliver their products to Ubuntu users at no cost through the same familiar tools for installing and upgrading software. The software in the partner repository is officially supported with security and other important updates by its respective vendors. Canonical supports the packaging of the software for Ubuntu and provides guidance to vendors. The partner repository is disabled by default and can be enabled by the user. Some popular products distributed via the partner repository as of 28 April 2013 are Adobe Flash Player, Adobe Reader, Skype and Wine are also able to be installed to run Windows software if the user desires.

'''Package Archives'''

A Personal Package Archive (PPA) is a software repository for uploading source packages to be built and published as an Advanced Packaging Tool (APT) repository by Launchpad. While the term is used exclusively within Ubuntu, Launchpad's host, Canonical, envisions adoption beyond the Ubuntu community.

'''Third Party Software'''

Ubuntu has a certification system for third-party software. Some third-party software that does not limit distribution is included in Ubuntu's multiverse component. The package ubuntu-restricted-extras additionally contains software that may be legally restricted, including support for MP3 and DVD playback, Microsoft TrueType core fonts, Sun's Java runtime environment, Adobe's Flash Player plugin, many common audio/video codecs, and unrar, an unarchiver for files compressed in the RAR file format.

Additionally, third-party application suites are available for purchase through Ubuntu Software, including many games such as Braid and Oil Rush, software for DVD playback and media codecs. More games are available through Steam.

==Releases==

Each Ubuntu release has a version number that consists of the year and month number of the release. For example, the first release was Ubuntu 4.10 as it was released on 20 October 2004. Version numbers for future versions are provisional; if the release is delayed the version number changes accordingly.

Ubuntu releases are also given alliterative code names, using an adjective and an animal (e.g. "Xenial Xerus"). With the exception of the first two releases, code names are in alphabetical order, allowing a quick determination of which release is newer, at least until restarting the cycle with the release of Artful Aardvark in October 2017. Commonly, Ubuntu releases are referred to using only the adjective portion of the code name; for example, the 14.04 LTS release is commonly known as "Trusty".

Releases are timed to be approximately one month after GNOME releases (which in turn are about one month after releases of X.org). As a result, every Ubuntu release was introduced with an updated version of both GNOME and X. After major releases, the Ubuntu Developer Summit (UDS) is held, at which the Ubuntu community sets the development direction for the next cycle. The latest such event, as of February 2017, was held 5–7 May 2015, after Ubuntu 15.04 and planning 15.10.

Upgrades from one LTS release to the next LTS release (e.g. Ubuntu 14.04 LTS to Ubuntu 16.04 LTS) are supported, while upgrades from non-LTS have only supported upgrade to the next release, regardless of its LTS status (e.g. Ubuntu 15.10 to Ubuntu 16.04 LTS).

Ubuntu 10.10 (Maverick Meerkat), was released on 10 October 2010 (10–10–10). This departed from the traditional schedule of releasing at the end of October in order to get "the perfect 10", and makes a playful reference to The Hitchhiker's Guide to the Galaxy books, since, in binary, 101010 equals decimal 42, the "Answer to the Ultimate Question of Life, the Universe and Everything" within the series.

Ubuntu requires a 2 GB or larger installation medium. However, there is an option to install it with a Minimal CD. Server releases still fit on CDs.

==Variants==

The variant officially recommended for most users, and officially supported by Canonical, is Ubuntu Desktop (formally named as Ubuntu Desktop Edition, and simply called Ubuntu), designed for desktop and laptop PCs. From Ubuntu 17.10, it uses GNOME Shell as the default desktop environment. From Ubuntu 11.04 to Ubuntu 17.04, the Unity desktop interface was default, and before Ubuntu 11.04, GNOME 2. A number of other variants are distinguished simply by each featuring a different desktop environment. The following are not commercially supported by Canonical:

*Ubuntu MATE (with the MATE desktop environment)
*Ubuntu Budgie (with the Budgie desktop environment)
*Lubuntu (with LXDE)
*Kubuntu (with KDE)
*Xubuntu (with Xfce)

LXDE and Xfce are sometimes recommended for use with older PCs that may have less memory and processing power available.

*Besides Ubuntu Desktop, there are several other official Ubuntu editions, which are created and maintained by Canonical and the Ubuntu community and receive full support from Canonical, its partners and the Community. They included the following:

*Ubuntu Business Desktop Remix, was a release meant for business users that came with special enterprise software including Adobe Flash, Canonical Landscape, OpenJDK 6 and VMware View, while removing social networking and file sharing applications, games and development/sysadmin tools. The goal of the Business Desktop Remix was not to copy other enterprise-oriented distributions, such as Red Hat Enterprise Linux, but to make it, according to Mark Shuttleworth's blog, "easier for institutional users to evaluate Ubuntu Desktop for their specific needs".

*Ubuntu Core, a tiny and transactional version of Ubuntu without GUI for IoT and SoC devices. It runs 

*Linux app packages, known as snaps, that can be upgraded remotely.

There are more Ubuntu variants (or derivatives) based on the official Ubuntu editions. These install a default set of packages that differ from the official Ubuntu distributions.

The variants recognized by Canonical as contributing significantly towards the Ubuntu project (but not commercially supported) are the following:


*Edubuntu, a subproject and add-on for Ubuntu, designed for school environments and home users.
*Mythbuntu, designed for creating a home theater PC with MythTV and uses the Xfce desktop environment.
*Ubuntu Studio, a distribution made for professional video and audio editing, comes with higher-end free editing software.

There are many more variants, created and maintained by individuals and organizations outside of Canonical, and they are self-governed projects that work more or less closely with the Ubuntu community.

'''Ubuntu Kylin'''

Since Ubuntu 10.10, a Chinese-language version of Ubuntu Desktop called "Ubuntu Chinese Edition" (later Ubuntu Kylin), had been released alongside the various other editions, up to and including 12.04. However, in 2013, Canonical reached an agreement with the Ministry of Industry and Information Technology of the People's Republic of China to make Ubuntu the new basis of the Kylin operating system (that had used FreeBSD) starting with Raring Ringtail (version 13.04). The first version of Ubuntu Kylin was released on 25 April 2013.

'''Ubuntu Server'''

Ubuntu has a server edition that uses the same APT repositories as the Ubuntu Desktop Edition. The differences between them are the absence of an X Window environment in a default installation of the server edition (although one can easily be installed, including Unity, GNOME, KDE or Xfce), and some alterations to the installation process. The server edition uses a screen-mode, character-based interface for the installation, instead of a graphical installation process. This enables installation on machines with a serial or "dumb terminal" interface without graphics support.

Since version 10.10, the server edition (like the desktop version) supports hardware virtualization and can be run in a virtual machine, either inside a host operating system or in a hypervisor, such as VMware ESXi, Oracle, Citrix XenServer, Microsoft Hyper-V, QEMU, a Kernel-based Virtual Machine, or any other IBM PC compatible emulator or virtualizer. Ubuntu 7.10 and later turn on the AppArmor security module for the Linux kernel by default on key software packages, and the firewall is extended to common services used by the operating system.

*Has minimum requirements of: 512 MB RAM, 1 GHz CPU, and 1 GB disk space (1.75 GB for all features to be installed).
*Runs on all major architectures – x86, x86-64, ARM v7, ARM64, POWER8 and IBM System z mainframes via LinuxONE. SPARC is no longer commercially supported.
*Supports ZFS, a file system with snapshot capabilities, since Ubuntu 16.04 LTS.
*Has LXD, a hypervisor to manage LXC Linux containers.
*Includes the first production release of DPDK for line-speed kernel networking.
*Uses Linux 4.4 kernel and systemd service manager.
*Is certified as a guest on AWS, Microsoft Azure, Joyent, IBM and HP Cloud.

It has up-to-date versions of key server software pre-installed, including: Tomcat (v8), PostgreSQL (v9.5), Docker v(1.10), Puppet (v3.8.5), Qemu (v2.5), Libvirt (v1.3.1), LXC (v2.0), and MySQL (v5.6).

'''Ubuntu Touch'''

Ubuntu Touch is, by now, an unofficial version of Ubuntu developed for smartphones and tablets which was announced then-official by Canonical on 2 January 2013. Ubuntu Touch was released to manufacturing on 16 September 2014. The first device to run it was the Galaxy Nexus. A concept for a smartphone running Ubuntu for Phones was published on Ubuntu's official channel on YouTube. The platform allows developing one app with two interfaces: a smartphone UI, and, when docked, a desktop UI; a demo version for higher-end Ubuntu smartphones was shown that could run a full Ubuntu desktop when connected to a monitor and keyboard, which was to ship as Ubuntu for Android. Ubuntu for Tablets was previewed at 19 February 2013. According to the keynote video, an Ubuntu Phone will be able to connect to a tablet, which will then utilize a tablet interface; plugging a keyboard and mouse into the tablet will transform the phone into a desktop; and plugging a television monitor into the phone will bring up the Ubuntu TV interface.

On 6 February 2015, the first smartphone running Ubuntu Touch pre-installed was announced. The BQ Aquaris E4.5 Ubuntu Edition features a 4.5-inch (110 mm) qHD display, a 1.3 GHz quad-core Cortex-A7 processor, and 1 GB of RAM. It is currently priced at €169.90, while the 5-inch Aquaris E5 HD Ubuntu Edition is available for €199.90.

Mark Shuttleworth, Canonical CEO, announced on 5 April 2017, that Ubuntu Touch would no longer be developed by Canonical Ltd. The project was then picked up by the UBports community.

'''Cloud Computing'''

Ubuntu offers Ubuntu Cloud Images which are pre-installed disk images that have been customized by Ubuntu engineering to run on cloud-platforms such as Amazon EC2, OpenStack, Microsoft Windows and LXC. Ubuntu is also prevalent on VPS platforms such as DigitalOcean.

Ubuntu 11.04 added support for OpenStack, with Eucalyptus to OpenStack migration tools added by Canonical in Ubuntu Server 11.10. Ubuntu 11.10 added focus on OpenStack as the Ubuntu's preferred IaaS offering though Eucalyptus is also supported. Another major focus is Canonical Juju for provisioning, deploying, hosting, managing, and orchestrating enterprise data center infrastructure services, by, with, and for the Ubuntu Server.

==Adoption and Reception==

'''Installed base'''

As Ubuntu is distributed freely and there is no registration process, Ubuntu usage can only be roughly estimated. In 2015, Canonical's Ubuntu Insights page stated "Ubuntu now has over 40 million desktop users and counting".

W3Techs Web Technology Surveys estimated in September 2016 that:

*Ubuntu is the most popular Linux distribution for running Web servers on, used by 34.1% of "all the websites" they analyze. Linux distributions are used a little more than Microsoft Windows for websites based on W3Techs numbers, and only Ubuntu and Debian (which Ubuntu is based on, with the same package manager and thus administered the same way) make up 65% of all Linux distributions for web serving use; the usage of 

*Ubuntu surpassed Debian (for such server use), in May 2016.

*Ubuntu is the most popular Linux distribution among the top 1000 sites and gains around 500 of the top 10 million websites per day.

*Ubuntu is used by 12.4% of all websites analyzed, growing from less than 7% in October 2012.

W3Techs analyzes the top 10 million websites only. It considers Linux as a subcategory of Unix and estimated in the same month that 66.7% of the analyzed websites use Unix, under that broad definition.
According to TheCloudMarket.com, Ubuntu is on at least 57% of the images it scanned on Amazon EC2 (and Windows at 7.8%).

Wikimedia Foundation data (based on user agent) for September 2013 shows that Ubuntu generated the most page requests to Wikimedia sites, including Wikipedia, among recognizable Linux distributions.


'''Large-scale deployments'''

The public sector has also adopted Ubuntu. As of January 2009, the Ministry of Education and Science of Republic of Macedonia deployed more than 180,000 Ubuntu-based classroom desktops, and has encouraged every student in the country to use Ubuntu-powered computer workstations; the Spanish school system has 195,000 Ubuntu desktops. The French police, having already started using open-source software in 2005 by replacing Microsoft Office with OpenOffice.org, decided to transition to Ubuntu from Windows XP after the release of Windows Vista in 2006. By March 2009, the Gendarmerie Nationale had already switched 5000 workstations to Ubuntu. Based on the success of that transition, it planned to switch 15,000 more over by the end of 2009 and to have switched all 90,000 workstations over by 2015 (GendBuntu project). Lt. Colonel Guimard announced that the move was very easy and allowed for a 70% saving on the IT budget without having to reduce its capabilities. In 2011, Ubuntu 10.04 was adopted by the Indian justice system. The Government of Kerala adopted Ubuntu for the legislators in Kerala and the government schools of Kerala began to use customized IT@School Project Ubuntu 10.04 which contains specially created software for students. Previously, Windows was used in the schools. Textbooks were also remade with an Ubuntu syllabus and are currently used in schools.

The city of Munich, Germany, has forked Kubuntu 10.04 LTS and created LiMux for use on the city's computers. After originally planning to migrate 12,000 desktop computers to LiMux, it was announced in December 2013 that the project had completed successfully with the migration of 14,800 out of 15,500 desktop computers, but still keeping about 5000 Windows clients for unported applications. In February 2017 the city decided to evaluate the migration back to Windows – some stated reasons were missing compatibility, bad user acceptance and complexity. In March 2012, the government of Iceland launched a project to get all public institutions using free and open-source software. Already, several government agencies and schools have adopted Ubuntu. The government cited cost savings as a big factor for the decision, and also stated that open source software avoids vendor lock-in. A 12-month project was launched to migrate the biggest public institutions in Iceland to using open-source software, and help ease the migration for others. US president Barack Obama's successful campaign for re-election in 2012 used Ubuntu in its IT department. In August 2014, the city of Turin, Italy, announced its migration from Windows XP to Ubuntu for the 8,300 desktop computers used by the municipality, becoming the first city in Italy to adopt Ubuntu.

''Critical Reception''

Ubuntu was awarded the Reader Award for best Linux distribution at the 2005 LinuxWorld Conference and Expo in London, received favorable reviews in online and print publications, and has won InfoWorld's 2007 Bossie Award for Best Open Source Client OS. In early 2008, PC World named Ubuntu the "best all-around Linux distribution available today", though it criticized the lack of an integrated desktop effects manager. Chris DiBona, the program manager for open-source software at Google, said "I think Ubuntu has captured people's imaginations around the Linux desktop," and "If there is a hope for the Linux desktop, it would be them". As of January 2009, almost half of Google's 20,000 employees used Goobuntu, a proprietary, slightly modified version of Ubuntu. In 2012, ZDNet reported that Ubuntu was still Google's desktop of choice. In March 2016, Matt Hartley picked a list of best Linux distributions for Datamation; he chose Ubuntu as number one.

In 2008, Jamie Hyneman, co-host of the American television series MythBusters, advocated Linux (giving the example of Ubuntu) as a solution to software bloat. Other celebrity users of Ubuntu include science fiction writer Cory Doctorow and actor Stephen Fry.

In January 2014, the UK's authority for computer security, CESG, reported that Ubuntu 12.04 LTS was "the only operating system that passes as many as 9 out of 12 requirements without any significant risks".

Ubuntu 14.04 improved battery life, but still lagged other operating systems in the battery life metric.

''Amazon Controversy''

One of the new features of Unity in Ubuntu 12.10 was the shopping lens—Amazon search results displayed in the Unity dash. It was alternately described as the "Amazon controversy", "privacy fiasco" and "spyware".

From October 2012, it sent the user's queries through a secure HTTPS connection from the home lens to productsearch.ubuntu.com, which then polled Amazon.com to find relevant products; Amazon then sent product images directly to the user's computer through HTTP. If the user clicked on one of these results and then bought something, Canonical got a small fraction of the sale.

In 2012, many reviewers criticized it: as the home lens is the normal means to search for content on the local machine, reviewers were concerned about the disclosure of queries that were intended to be local, creating a privacy problem. As the feature is active by default instead of opt-in, many users could be unaware of it.

Some users chose to turn it off or to remove the feature using a patch. An April 2014 article by Scott Gilbertson stated that the online search components of Ubuntu could be turned off with a couple of clicks in version 14.04.

For the move, it was awarded the 2013 Austria Big Brother Award.

Since Ubuntu 16.04, the setting is off by default.

The Unity desktop environment was discontinued in Ubuntu 17.10, in favour of GNOME, which has no support for Unity lenses. An Amazon shopping icon still appears in the Ubuntu Dock by default, but merely opens the default web browser with Canonical's referral link.

'''Conformity with European data Privacy Law'''

Soon after being introduced, doubts emerged on the conformance of the shopping lens with the European Data Protection Directive. A petition was later signed by over 50 Ubuntu users and delivered to Canonical demanding various modifications to the feature in order to clearly frame it within European law. Canonical did not reply.

In 2013, a formal complaint on the shopping lens was filed with the Information Commissioner's Office (ICO), the UK data privacy office. Almost one year later the ICO ruled in favour of Canonical, considering the various improvements introduced to the feature in the meantime to render it conformable with the Data Protection Directive. According to European rules, this ruling is automatically effective in the entirety of the European Union. However, the ruling also made clear that at the time of introduction the feature was not legal, among other things, since it was missing a privacy policy statement.

'''Local Communities'''

In an effort to reach out to users who are less technical, and to foster a sense of community around the distribution, Local Communities, better known as "LoCos", have been established throughout the world. Originally, each country had one LoCo Team. However, in some areas, most notably the United States and Canada, each state or province may establish a team. A LoCo Council approves teams based upon their efforts to aid in either the development or the promotion of Ubuntu.

'''Hardware Vendor Support'''

Ubuntu works closely with OEMs to jointly make Ubuntu available on a wide range of devices. A number of vendors offer computers with Ubuntu pre-installed, including Dell, Hasee, Sharp Corporation, and Cirrus7. Specifically, Dell offers the XPS 13 laptop, Developer Edition with Ubuntu pre-installed. Together, Dell, Lenovo, HP, and ASUS offer over 200 desktop and close to 500 laptop PCs preloaded with Ubuntu. Certified OEM images are also available for Ubuntu Advantage customers. System76, WeWi and Tesco. System76 PCs are sold exclusively with Ubuntu. Dell and System76 customers are able to choose between 30-day, three-month, and yearly Ubuntu support plans through Canonical. Dell computers (running Ubuntu 10.04) include extra support for ATI/AMD Video Graphics, Dell Wireless, Fingerprint Readers, HDMI, Bluetooth, DVD playback (using LinDVD), and MP3/WMA/WMV. Asus is also selling some Eee PCs with Ubuntu pre-installed and announced "many more" models running Ubuntu for 2011. Vodafone has made available a notebook for the South-African market called "Webbook".

Dell sells computers (initially Inspiron 14R and 15R laptops) pre-loaded with Ubuntu in India and China, with 850 and 350 retail outlets respectively. Starting in 2013, Alienware began offering its X51 model gaming desktop pre-installed with Ubuntu at a lower price than if it were pre-installed with Windows.

While Linux already works in IBM's mainframe system (zLinux), IBM in collaboration with Canonical (and SUSE; "Linux Foundation will form a new Open Mainframe Project") announced Ubuntu support for their z/Architecture (IBM claims their latest system, IBM zEnterprise System, version z13 is the most powerful computer in the world; it is the largest computer by transistor count) for the first time, at the time of their "biggest code drop" ("LinuxOne") in Linux history.

In early 2015, Intel launched the Intel Compute Stick small form factor computer available preloaded with Ubuntu or Windows operating systems.

'''Windows Subsystem'''

In March 2016, Microsoft announced that it would support the Ubuntu userland on top of the Windows 10 kernel by implementing the Linux system calls as a subsystem. The focus lies on command-line tools like Bash and is therefore primarily directed towards developers. As of the Fall Creators Update, this feature is fully available to the public.
