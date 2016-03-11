# -*- mode: ruby -*-
# vi: set ft=ruby :

# Template for Google App Engine PHP with vagrant

Vagrant.configure(2) do |config|

  config.vm.box = "jankrib/ubuntu-gae-php"

  config.vm.network "forwarded_port", guest: 8080, host: 8080
  config.vm.network "forwarded_port", guest: 8000, host: 8000

  # PhpMyAdmin at 8888
  config.vm.network "forwarded_port", guest: 8888, host: 8888

  config.vm.provider "virtualbox" do |vb|
    vb.memory = "2048"
  end

  config.vm.provision :shell, :privileged => false,  :path => "bin/startup.sh", :run => 'always'
  config.vm.provision :shell, :privileged => true,   :path => "bin/phpmyadmin.sh"
end
