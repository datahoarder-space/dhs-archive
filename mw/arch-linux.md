Arch Linux is a Linux distribution for computers based on x86-64 architectures.

Arch Linux is composed predominantly of free and open-source software, and supports community involvement.

The design approach of the development team follows the KISS principle ("keep it simple, stupid") as the general guideline, and focuses on elegance, code correctness, minimalism and simplicity, and expects the user to be willing to make some effort to understand the system's operation. A package manager written specifically for Arch Linux, pacman, is used to install, remove and update software packages.

Arch Linux uses a rolling release model, such that a regular system update is all that is needed to obtain the latest Arch software; the installation images released by the Arch team are simply up-to-date snapshots of the main system components.

Arch Linux has comprehensive documentation in the form of a community wiki, called the ArchWiki. The wiki is widely regarded among the Linux community for often having the most recent information on a specific topic and for being applicable beyond Arch Linux.

==History==

Inspired by CRUX, another minimalist distribution, Judd Vinet started Arch Linux in March 2002. Vinet led Arch Linux until 1 October 2007, when he stepped down due to lack of time, transferring control of the project to Aaron Griffin.[13]

Originally only for 32-bit x86 CPUs, the first x86_64 installation ISO was released in April 2006. The end of i686 support was announced in January 2017, with the February 2017 ISO being the last one including i686 and making the architecture unsupported in November 2017.

==='''Repository Security'''===

Until pacman version 4.0.0 Arch Linux's package manager lacked support for signed packages.[18] Packages and metadata were not verified for authenticity by pacman during the download-install process. Without package authentication checking, tampered-with or malicious repository mirrors can compromise the integrity of a system. Pacman 4 allowed verification of the package database and packages, but it was disabled by default. In November 2011 package signing became mandatory for new package builds, and as of 21 March 2012 every official package is signed.

In June 2012, package signing verification became official and is now enabled by default in the installation process.

==Design and Principles==

Arch is largely based around binary packages. Packages target x86-64 microprocessors to assist performance on modern hardware. A ports/ebuild-like system is also provided for automated source compilation, known as the Arch Build System.

Arch Linux focuses on simplicity of design, meaning that the main focus involves creating an environment that is straightforward and relatively easy for the user to understand directly, rather than providing polished point-and-click style management tools — the package manager, for example, does not have an official graphical front-end. This is largely achieved by encouraging the use of succinctly commented, clean configuration files that are arranged for quick access and editing. This has earned it a reputation as a distribution for "intermediate and advanced Linux users who aren't afraid of the command line".

==Installation==

The Arch Linux website supplies ISO images that can be run from CD or USB. After a user partitions and formats their drive, a simple command line script (pacstrap) is used to install the base system. The installation of additional packages, which are not part of the base system (for example, desktop environments), can be done with either pacstrap, or pacman after booting (or chrooting) into the new installation.

An alternative to using CD or USB images for installation is to use the static version of the package manager Pacman, from within another Linux-based operating system. The user can mount their newly formatted drive partition, and use pacstrap (or pacman with the appropriate command-line switch) to install base and additional packages with the mountpoint of the destination device as the root for its operations. This method is useful when installing Arch Linux onto USB flash drives, or onto a temporarily mounted device which belongs to another system.

Regardless of the selected installation type, further actions need to be taken before the new system is ready for use, most notably by installing a bootloader, creating an initramfs, and configuring the new system.

==Package Management==

==='''pacman'''===

To facilitate regular package changes, pacman (The Arch Package Manager, acronym over "package manager") was developed by Judd Vinet to provide Arch with its own package manager able to track dependencies.[26] It is written in C.[27]

All packages are managed using the pacman package manager. Pacman handles package installation, upgrades, removal, and downgrades, and features automatic dependency resolution. The packages for Arch Linux are obtained from the Arch Linux package tree and are compiled for either IA-32 or x86-64 architectures. It uses binary packages in the tar.xz format, with .pkg placed before this to indicate that it is a pacman package (giving .pkg.tar.xz).

==='''Repositories'''===

The following official binary repositories exist:

* core, which contains all the packages needed to set up a base system
* extra, which holds packages not required for the base system, including desktop environments and programs
* community, which contains packages built and voted on by the community; includes packages that have sufficient votes and have been adopted by a "trusted user".
* multilib, a centralized repository for x86_64 users to more readily support 32-bit applications in a 64-bit environment.

Additionally there are testing repositories which include binary package candidates for other repositories. Currently, the following testing repositories exist:

* testing, with packages for core and extra.
* community-testing, with packages for community.
* multilib-testing, with packages for multilib.

The staging and community-staging repositories are used for some rebuilds to avoid broken packages in testing.

There are also two other repositories that include the newest version of certain desktop environments.

* gnome-unstable, which contains packages of a new version of software from GNOME before being released into testing.
* kde-unstable, which contains packages of a new version of KDE software before being released into testing.

The unstable repository was dropped in July 2008 and most of the packages moved to other repositories.[30] In addition to the official repositories, there are a number of unofficial user repositories.

The most well-known unofficial repository is the Arch User Repository, or AUR, hosted on the Arch Linux site. However, the AUR does not host binary packages, hosting instead a collection of build scripts known as PKGBUILDs.

==='''Arch Build System'''===

The Arch Build System (ABS) is a ports-like source packaging system that compiles source tarballs into binary packages, which are installed via pacman.[31] The Arch Build System provides a directory tree of shell scripts, called PKGBUILDs, that enable any and all official Arch packages to be customized and compiled. Rebuilding the entire system using modified compiler flags is also supported by the Arch Build System. The Arch Build System makepkg tool can be used to create custom pkg.tar.xz packages from third-party sources. The resulting packages are also installable and trackable via pacman.

==='''Arch User Repository'''===

In addition to the repositories, the Arch User Repository (AUR) provides user-made PKGBUILD scripts for packages not included in the repositories. These PKGBUILD scripts simplify building from source by explicitly listing and checking for dependencies and configuring the install to match the Arch architecture.[33] Arch User Repository helper programs can further streamline the downloading of PKGBUILD scripts and associated building process. However, this comes at the cost of executing PKGBUILDs not validated by a trusted person; as a result, Arch developers have stated that the utilities for automatic finding, downloading and executing of PKGBUILDs will never be included in the official repositories.

Users can create packages compatible with pacman using the Arch Build System and custom PKGBUILD scripts.[35] This functionality has helped support the Arch User Repository, which consists of user contributed packages to supplement the official repositories.

The Arch User Repository provides the community with packages that are not included in the repositories. Reasons include:

* License issues: software that cannot be redistributed, but is free to use, can be included in the Arch User Repository since all that is hosted by the Arch Linux website is a shell script that downloads the actual software from elsewhere. Examples include proprietary freeware such as Google Earth and RealPlayer.

* Modified official packages: the Arch User Repository also contains many variations on the official packaging as well as beta versions of software that is contained within the repositories as stable releases.

* Rarity of the software: rarely used programs have not been added to the official repositories (yet).

* Betas or "nightly" versions of software which are new yet unstable. Examples include the firefox-nightly, which is a package which gives new daily builds of the Firefox browser.

PKGBUILDs for any software can be contributed by ordinary users and any PKGBUILD that is not confined to the Arch User Repository for policy reasons can be voted into the community repositories.

== Derivatives ==
{{Main article|List of Linux distributions#Pacman-based}}
There are multiple distributions which either build on top of Arch Linux or are based on its repositories, including the following:
{|class="wikitable sortable"
!Name||Kernel||Hardware arch||Default [[user space|userland]]||Descriptions
|-
|[[Anarchy Linux]] (formerly Arch Anywhere)
|Generic Linux kernel||[[x64]]||Text mode
|Performs a classic Arch installation using a text-based interface. It is also possible to select between several desktop variants and additional software.<ref>https://arch-anywhere.org/</ref><ref>https://github.com/deadhead420/arch-linux-anywhere</ref>
|-
|[[Antergos]]
|Generic Linux kernel||[[x64]]||[[GNOME]]
|a successor of ''Cinnarch'' that offers a graphical installer; uses the stock Arch Linux repositories along its own.
|-
|[[Arch Hurd]]
|[[GNU Hurd]]||Unknown||Text mode
|An Arch derivative using a different kernel, [[GNU Hurd]].
|-
|[[Arch Linux 32]]
|Generic Linux kernel||[[i686]] (32-bit x86)||Text mode
|A community-supported continuation of i686. Created in 2017 when official support for i686 was discontinued.
|-
|[[Arch Linux ARM]]
|Generic Linux kernel||[[ARM architecture|ARM]]||Text mode
|An Arch Linux derivative that tries to port the distribution to many ARM computers, originated from the developers at ArchMobile and PlugApps. It has been ported to some ARMv5, ARMv6, ARMv7 and ARMv8 devices, such as [[BeagleBoard]], CuBox-i, [[PandaBoard]], [[Raspberry Pi]], and TrimSlice
|-
|[[ArchBang]]
|Generic Linux kernel||[[x64]]||[[Openbox]]
|A variant that uses [[Openbox]] as the desktop environment and emphasizes speed; uses the stock Arch Linux repositories.
|-
|[[ArchLabs|ArchLabs Linux]]
|Generic Linux kernel
|[[X86-64|x64]]
|[[Openbox]]
|A variant that uses [[Openbox]] as the desktop environment.  Emphasis on speed and easy installation of Arch Linux.  Uses the stock Arch Linux repositories and the AUR as well as their own ArchLabs repository.
|-
|[[Arch XFerience]]
|Generic Linux kernel
|[[X86-64|x64]]
|[[Xfce]]
|Arch Linux based distro built for usability, simplicity & stability<ref>sourceforge:projects/arch-xferience/</ref>
|-
|[[Artix Linux]]
|Generic Linux kernel||[[x64]]||[[LXQt]], [[i3 (window manager)|i3]]
|A fork of Arch Linux with different init systems. It uses [[OpenRC]] by default, with support for [[S6 (software)|S6]] and [[runit]].<ref>https://artixlinux.org/</ref>
|-
|[[ArchMerge]]
|Generic Linux kernel
|[[x64]]
|[[Xfce]], [[Openbox]], [[i3 (window manager)|i3]]<ref name="archmerge-info">{{Cite web|url=https://archmerge.info/|title=ArchMerge {{!}} Linux Made Easy and Beautiful|website=archmerge.info|language=en-US|access-date=2017-12-21}}</ref>
|Intended to help users learn the Arch Linux ecosystem. Full-featured desktop OS. The ''ArchMergeD'' alternative version is a minimal distro that allows users to build their own system on an Arch base.<ref name="archmerge-info" />
|-
|[[BBQLinux]]
|Generic Linux kernel||[[x64]]||[[Cinnamon (software)|Cinnamon]]
|A specialized variant for [[Android (software)|Android]] developers, bundled with tools and utilities needed to build AOSP or AOSP-based distributions like [[CyanogenMod]] or [[OmniROM]].<ref>https://bbqlinux.sourceforge.io</ref>
|-
|[[BlackArch Linux]]
|Generic Linux kernel||[[x64]], [[ARM architecture|ARM]]||[[Fluxbox]]
|A penetration testing distribution, used by security and forensic specialists. 
|-
|[[Chakra Linux]]
|Generic Linux kernel||[[x64]]||[[Qt (software)|Qt]]
|Originally derived from Arch Linux, with the latest KDE. For now uses the pacman utility for package management. Strives to be Qt-only.
|-
|[[Condres OS Gnu/Linux]]
|Generic Linux kernel||[[x64]], [[x86]]||[[GNOME]], [[MATE]], [[Cinnamon (software)|Cinnamon]], [[KDE]]
|Official Apricity OS fork - uses Arch repositories, package manager Pamac, PushBullet, BTSync, ICE SSB manager, and modified GNOME, Mate, Cinnamon and KDE desktop environments.<ref>https://condresos.codelinsoft.it</ref>
|-
|[[KaOS]]
|Generic Linux kernel||[[x64]]||[[Qt (software)|Qt]]
|An independent distribution focused on Qt, that follows the latest innovations, always shipping the most up to date there is available for the Plasma Desktop.<ref>https://kaosx.us/</ref>
|-
|[[LinHES]]
|Generic Linux kernel||[[x64]]||[[Enlightenment (software)|Enlightenment]]
|Linux Home Entertainment Server, Designed for use on home theater PCs (HTPCs), providing applications for recording TV and acting as a sound and video center
|-
|[[MagpieOS]]
|Generic Linux kernel||[[x64]]||[[GNOME]], [[Xfce]]
| An Arch Linux based distribution from Bangladeshi developer focused on simplicity and targeting newbie Arch users.<ref>http://magpieos.net</ref> 
|-
|[[Manjaro Linux]]
|Generic Linux kernel||[[x64]]||[[Xfce]], [[Plasma 5]], [[GNOME]]
| An Arch Linux-based distribution with a graphical installer, additional GUI tools for package management and system tuning; provides many preconfigured popular desktop environments; updates from own package repository that is delayed for stability reasons.
|-
|[[PacBSD]]
|[[BSD]]||Unknown||Unknown
|a [[FreeBSD]] derivative, which builds on top of the package system of Arch Linux
|-
|[[Parabola (software)|Parabola]]
|[[Linux-libre]]||[[x64]], [[ARMv7]]||[[MATE]]
|An Arch community-driven distribution that is fully conformant with the [[GNU Project#GNU Free System Distribution Guidelines|GNU Free System Distribution Guidelines]], uses the [[Linux-libre]] kernel and excludes [[binary blobs|blobs]] including firmware normally found in Arch
|}

==Versions==

==='''Rolling Releases'''===

Similar to Tumbleweed and Gentoo, and unlike other major distributions such as Debian, Ubuntu, or Fedora, Arch Linux does not schedule releases for specific dates but uses a "rolling release" system, with new packages provided throughout the day. Its package management allows users to easily keep systems updated.[46]

Monthly updated ISO installation images are released on every first week of a month. They contain the latest software from the stable repositories and stay unchanged until the following month. In most cases, older versions of the installation image may be used to install Arch Linux. Since the software is downloaded over the internet, a fresh installation always contains the newest software, although an update to the keys may be necessary in order to verify the software.

Occasionally, manual interventions are required for certain updates, with instructions posted on the news section of the Arch Linux website.

==='''Other Platforms'''===

There are several projects working on porting the Arch Linux ideas and tools to other kernels, including PacBSD (formerly ArchBSD) and Arch Hurd, which are based on the FreeBSD and GNU Hurd kernels respectively. There is also the Arch Linux ARM project, which aims to port Arch Linux to ARM-based devices, including the Raspberry Pi.
