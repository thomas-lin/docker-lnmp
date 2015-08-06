# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|
  config.vm.box = "debian/jessie64"
  config.vm.hostname = "docker-lnmp"

  # config.vm.box_check_update = false

  config.vm.network "forwarded_port", guest: 80, host: 8000

  config.vm.network "private_network", ip: "10.1.15.100"

  # config.vm.network "public_network"

  # config.vm.synced_folder "../data", "/vagrant_data"

  # fix docker-mysql has no permission to access vagrant shared folder
  # config.vm.synced_folder ".", "/vagrant", :mount_options => ['dmode=777,fmode=666']

  # config.vm.provider "virtualbox" do |vb|
  #   # Display the VirtualBox GUI when booting the machine
  #   vb.gui = true
  #
  #   # Customize the amount of memory on the VM:
  #   vb.memory = "1024"
  # end
  
  # config.push.define "atlas" do |push|
  #   push.app = "YOUR_ATLAS_USERNAME/YOUR_APPLICATION_NAME"
  # end

  # config.vm.provision "shell", inline: <<-SHELL
  #   sudo apt-get update
  #   sudo apt-get install -y apache2
  # SHELL

  config.ssh.password = "vagrant"

  # fix error -> stdin: is not a tty
  config.ssh.shell = "bash -c 'BASH_ENV=/etc/profile exec bash'"
  config.vm.provision :shell , path: "install_docker.sh"
  config.vm.provision :shell, inline: "cd /vagrant && docker-compose up -d"

end
