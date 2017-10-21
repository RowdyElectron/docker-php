<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_26\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class HostConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\V1_26\\Model\\HostConfig') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\V1_26\Model\HostConfig) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Docker\API\V1_26\Model\HostConfig();
        if (property_exists($data, 'CpuShares')) {
            $object->setCpuShares($data->{'CpuShares'});
        }
        if (property_exists($data, 'Memory')) {
            $object->setMemory($data->{'Memory'});
        }
        if (property_exists($data, 'CgroupParent')) {
            $object->setCgroupParent($data->{'CgroupParent'});
        }
        if (property_exists($data, 'BlkioWeight')) {
            $object->setBlkioWeight($data->{'BlkioWeight'});
        }
        if (property_exists($data, 'BlkioWeightDevice')) {
            $values = [];
            foreach ($data->{'BlkioWeightDevice'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\V1_26\\Model\\ResourcesBlkioWeightDeviceItem', 'json', $context);
            }
            $object->setBlkioWeightDevice($values);
        }
        if (property_exists($data, 'BlkioDeviceReadBps')) {
            $values_1 = [];
            foreach ($data->{'BlkioDeviceReadBps'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Docker\\API\\V1_26\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceReadBps($values_1);
        }
        if (property_exists($data, 'BlkioDeviceWriteBps')) {
            $values_2 = [];
            foreach ($data->{'BlkioDeviceWriteBps'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Docker\\API\\V1_26\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceWriteBps($values_2);
        }
        if (property_exists($data, 'BlkioDeviceReadIOps')) {
            $values_3 = [];
            foreach ($data->{'BlkioDeviceReadIOps'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Docker\\API\\V1_26\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceReadIOps($values_3);
        }
        if (property_exists($data, 'BlkioDeviceWriteIOps')) {
            $values_4 = [];
            foreach ($data->{'BlkioDeviceWriteIOps'} as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Docker\\API\\V1_26\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceWriteIOps($values_4);
        }
        if (property_exists($data, 'CpuPeriod')) {
            $object->setCpuPeriod($data->{'CpuPeriod'});
        }
        if (property_exists($data, 'CpuQuota')) {
            $object->setCpuQuota($data->{'CpuQuota'});
        }
        if (property_exists($data, 'CpuRealtimePeriod')) {
            $object->setCpuRealtimePeriod($data->{'CpuRealtimePeriod'});
        }
        if (property_exists($data, 'CpuRealtimeRuntime')) {
            $object->setCpuRealtimeRuntime($data->{'CpuRealtimeRuntime'});
        }
        if (property_exists($data, 'CpusetCpus')) {
            $object->setCpusetCpus($data->{'CpusetCpus'});
        }
        if (property_exists($data, 'CpusetMems')) {
            $object->setCpusetMems($data->{'CpusetMems'});
        }
        if (property_exists($data, 'Devices')) {
            $values_5 = [];
            foreach ($data->{'Devices'} as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Docker\\API\\V1_26\\Model\\DeviceMapping', 'json', $context);
            }
            $object->setDevices($values_5);
        }
        if (property_exists($data, 'DiskQuota')) {
            $object->setDiskQuota($data->{'DiskQuota'});
        }
        if (property_exists($data, 'KernelMemory')) {
            $object->setKernelMemory($data->{'KernelMemory'});
        }
        if (property_exists($data, 'MemoryReservation')) {
            $object->setMemoryReservation($data->{'MemoryReservation'});
        }
        if (property_exists($data, 'MemorySwap')) {
            $object->setMemorySwap($data->{'MemorySwap'});
        }
        if (property_exists($data, 'MemorySwappiness')) {
            $object->setMemorySwappiness($data->{'MemorySwappiness'});
        }
        if (property_exists($data, 'NanoCPUs')) {
            $object->setNanoCPUs($data->{'NanoCPUs'});
        }
        if (property_exists($data, 'OomKillDisable')) {
            $object->setOomKillDisable($data->{'OomKillDisable'});
        }
        if (property_exists($data, 'PidsLimit')) {
            $object->setPidsLimit($data->{'PidsLimit'});
        }
        if (property_exists($data, 'Ulimits')) {
            $values_6 = [];
            foreach ($data->{'Ulimits'} as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Docker\\API\\V1_26\\Model\\ResourcesUlimitsItem', 'json', $context);
            }
            $object->setUlimits($values_6);
        }
        if (property_exists($data, 'CpuCount')) {
            $object->setCpuCount($data->{'CpuCount'});
        }
        if (property_exists($data, 'CpuPercent')) {
            $object->setCpuPercent($data->{'CpuPercent'});
        }
        if (property_exists($data, 'IOMaximumIOps')) {
            $object->setIOMaximumIOps($data->{'IOMaximumIOps'});
        }
        if (property_exists($data, 'IOMaximumBandwidth')) {
            $object->setIOMaximumBandwidth($data->{'IOMaximumBandwidth'});
        }
        if (property_exists($data, 'Binds')) {
            $values_7 = [];
            foreach ($data->{'Binds'} as $value_7) {
                $values_7[] = $value_7;
            }
            $object->setBinds($values_7);
        }
        if (property_exists($data, 'ContainerIDFile')) {
            $object->setContainerIDFile($data->{'ContainerIDFile'});
        }
        if (property_exists($data, 'LogConfig')) {
            $object->setLogConfig($this->denormalizer->denormalize($data->{'LogConfig'}, 'Docker\\API\\V1_26\\Model\\HostConfigLogConfig', 'json', $context));
        }
        if (property_exists($data, 'NetworkMode')) {
            $object->setNetworkMode($data->{'NetworkMode'});
        }
        if (property_exists($data, 'PortBindings')) {
            $values_8 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'PortBindings'} as $key => $value_8) {
                $values_8[$key] = $this->denormalizer->denormalize($value_8, 'Docker\\API\\V1_26\\Model\\HostConfigPortBindingsItem', 'json', $context);
            }
            $object->setPortBindings($values_8);
        }
        if (property_exists($data, 'RestartPolicy')) {
            $object->setRestartPolicy($this->denormalizer->denormalize($data->{'RestartPolicy'}, 'Docker\\API\\V1_26\\Model\\RestartPolicy', 'json', $context));
        }
        if (property_exists($data, 'AutoRemove')) {
            $object->setAutoRemove($data->{'AutoRemove'});
        }
        if (property_exists($data, 'VolumeDriver')) {
            $object->setVolumeDriver($data->{'VolumeDriver'});
        }
        if (property_exists($data, 'VolumesFrom')) {
            $values_9 = [];
            foreach ($data->{'VolumesFrom'} as $value_9) {
                $values_9[] = $value_9;
            }
            $object->setVolumesFrom($values_9);
        }
        if (property_exists($data, 'Mounts')) {
            $values_10 = [];
            foreach ($data->{'Mounts'} as $value_10) {
                $values_10[] = $this->denormalizer->denormalize($value_10, 'Docker\\API\\V1_26\\Model\\Mount', 'json', $context);
            }
            $object->setMounts($values_10);
        }
        if (property_exists($data, 'CapAdd')) {
            $values_11 = [];
            foreach ($data->{'CapAdd'} as $value_11) {
                $values_11[] = $value_11;
            }
            $object->setCapAdd($values_11);
        }
        if (property_exists($data, 'CapDrop')) {
            $values_12 = [];
            foreach ($data->{'CapDrop'} as $value_12) {
                $values_12[] = $value_12;
            }
            $object->setCapDrop($values_12);
        }
        if (property_exists($data, 'Dns')) {
            $values_13 = [];
            foreach ($data->{'Dns'} as $value_13) {
                $values_13[] = $value_13;
            }
            $object->setDns($values_13);
        }
        if (property_exists($data, 'DnsOptions')) {
            $values_14 = [];
            foreach ($data->{'DnsOptions'} as $value_14) {
                $values_14[] = $value_14;
            }
            $object->setDnsOptions($values_14);
        }
        if (property_exists($data, 'DnsSearch')) {
            $values_15 = [];
            foreach ($data->{'DnsSearch'} as $value_15) {
                $values_15[] = $value_15;
            }
            $object->setDnsSearch($values_15);
        }
        if (property_exists($data, 'ExtraHosts')) {
            $values_16 = [];
            foreach ($data->{'ExtraHosts'} as $value_16) {
                $values_16[] = $value_16;
            }
            $object->setExtraHosts($values_16);
        }
        if (property_exists($data, 'GroupAdd')) {
            $values_17 = [];
            foreach ($data->{'GroupAdd'} as $value_17) {
                $values_17[] = $value_17;
            }
            $object->setGroupAdd($values_17);
        }
        if (property_exists($data, 'IpcMode')) {
            $object->setIpcMode($data->{'IpcMode'});
        }
        if (property_exists($data, 'Cgroup')) {
            $object->setCgroup($data->{'Cgroup'});
        }
        if (property_exists($data, 'Links')) {
            $values_18 = [];
            foreach ($data->{'Links'} as $value_18) {
                $values_18[] = $value_18;
            }
            $object->setLinks($values_18);
        }
        if (property_exists($data, 'OomScoreAdj')) {
            $object->setOomScoreAdj($data->{'OomScoreAdj'});
        }
        if (property_exists($data, 'PidMode')) {
            $object->setPidMode($data->{'PidMode'});
        }
        if (property_exists($data, 'Privileged')) {
            $object->setPrivileged($data->{'Privileged'});
        }
        if (property_exists($data, 'PublishAllPorts')) {
            $object->setPublishAllPorts($data->{'PublishAllPorts'});
        }
        if (property_exists($data, 'ReadonlyRootfs')) {
            $object->setReadonlyRootfs($data->{'ReadonlyRootfs'});
        }
        if (property_exists($data, 'SecurityOpt')) {
            $values_19 = [];
            foreach ($data->{'SecurityOpt'} as $value_19) {
                $values_19[] = $value_19;
            }
            $object->setSecurityOpt($values_19);
        }
        if (property_exists($data, 'StorageOpt')) {
            $values_20 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'StorageOpt'} as $key_1 => $value_20) {
                $values_20[$key_1] = $value_20;
            }
            $object->setStorageOpt($values_20);
        }
        if (property_exists($data, 'Tmpfs')) {
            $values_21 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Tmpfs'} as $key_2 => $value_21) {
                $values_21[$key_2] = $value_21;
            }
            $object->setTmpfs($values_21);
        }
        if (property_exists($data, 'UTSMode')) {
            $object->setUTSMode($data->{'UTSMode'});
        }
        if (property_exists($data, 'UsernsMode')) {
            $object->setUsernsMode($data->{'UsernsMode'});
        }
        if (property_exists($data, 'ShmSize')) {
            $object->setShmSize($data->{'ShmSize'});
        }
        if (property_exists($data, 'Sysctls')) {
            $values_22 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Sysctls'} as $key_3 => $value_22) {
                $values_22[$key_3] = $value_22;
            }
            $object->setSysctls($values_22);
        }
        if (property_exists($data, 'Runtime')) {
            $object->setRuntime($data->{'Runtime'});
        }
        if (property_exists($data, 'ConsoleSize')) {
            $values_23 = [];
            foreach ($data->{'ConsoleSize'} as $value_23) {
                $values_23[] = $value_23;
            }
            $object->setConsoleSize($values_23);
        }
        if (property_exists($data, 'Isolation')) {
            $object->setIsolation($data->{'Isolation'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCpuShares()) {
            $data->{'CpuShares'} = $object->getCpuShares();
        }
        if (null !== $object->getMemory()) {
            $data->{'Memory'} = $object->getMemory();
        }
        if (null !== $object->getCgroupParent()) {
            $data->{'CgroupParent'} = $object->getCgroupParent();
        }
        if (null !== $object->getBlkioWeight()) {
            $data->{'BlkioWeight'} = $object->getBlkioWeight();
        }
        if (null !== $object->getBlkioWeightDevice()) {
            $values = [];
            foreach ($object->getBlkioWeightDevice() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'BlkioWeightDevice'} = $values;
        }
        if (null !== $object->getBlkioDeviceReadBps()) {
            $values_1 = [];
            foreach ($object->getBlkioDeviceReadBps() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'BlkioDeviceReadBps'} = $values_1;
        }
        if (null !== $object->getBlkioDeviceWriteBps()) {
            $values_2 = [];
            foreach ($object->getBlkioDeviceWriteBps() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'BlkioDeviceWriteBps'} = $values_2;
        }
        if (null !== $object->getBlkioDeviceReadIOps()) {
            $values_3 = [];
            foreach ($object->getBlkioDeviceReadIOps() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'BlkioDeviceReadIOps'} = $values_3;
        }
        if (null !== $object->getBlkioDeviceWriteIOps()) {
            $values_4 = [];
            foreach ($object->getBlkioDeviceWriteIOps() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data->{'BlkioDeviceWriteIOps'} = $values_4;
        }
        if (null !== $object->getCpuPeriod()) {
            $data->{'CpuPeriod'} = $object->getCpuPeriod();
        }
        if (null !== $object->getCpuQuota()) {
            $data->{'CpuQuota'} = $object->getCpuQuota();
        }
        if (null !== $object->getCpuRealtimePeriod()) {
            $data->{'CpuRealtimePeriod'} = $object->getCpuRealtimePeriod();
        }
        if (null !== $object->getCpuRealtimeRuntime()) {
            $data->{'CpuRealtimeRuntime'} = $object->getCpuRealtimeRuntime();
        }
        if (null !== $object->getCpusetCpus()) {
            $data->{'CpusetCpus'} = $object->getCpusetCpus();
        }
        if (null !== $object->getCpusetMems()) {
            $data->{'CpusetMems'} = $object->getCpusetMems();
        }
        if (null !== $object->getDevices()) {
            $values_5 = [];
            foreach ($object->getDevices() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data->{'Devices'} = $values_5;
        }
        if (null !== $object->getDiskQuota()) {
            $data->{'DiskQuota'} = $object->getDiskQuota();
        }
        if (null !== $object->getKernelMemory()) {
            $data->{'KernelMemory'} = $object->getKernelMemory();
        }
        if (null !== $object->getMemoryReservation()) {
            $data->{'MemoryReservation'} = $object->getMemoryReservation();
        }
        if (null !== $object->getMemorySwap()) {
            $data->{'MemorySwap'} = $object->getMemorySwap();
        }
        if (null !== $object->getMemorySwappiness()) {
            $data->{'MemorySwappiness'} = $object->getMemorySwappiness();
        }
        if (null !== $object->getNanoCPUs()) {
            $data->{'NanoCPUs'} = $object->getNanoCPUs();
        }
        if (null !== $object->getOomKillDisable()) {
            $data->{'OomKillDisable'} = $object->getOomKillDisable();
        }
        if (null !== $object->getPidsLimit()) {
            $data->{'PidsLimit'} = $object->getPidsLimit();
        }
        if (null !== $object->getUlimits()) {
            $values_6 = [];
            foreach ($object->getUlimits() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data->{'Ulimits'} = $values_6;
        }
        if (null !== $object->getCpuCount()) {
            $data->{'CpuCount'} = $object->getCpuCount();
        }
        if (null !== $object->getCpuPercent()) {
            $data->{'CpuPercent'} = $object->getCpuPercent();
        }
        if (null !== $object->getIOMaximumIOps()) {
            $data->{'IOMaximumIOps'} = $object->getIOMaximumIOps();
        }
        if (null !== $object->getIOMaximumBandwidth()) {
            $data->{'IOMaximumBandwidth'} = $object->getIOMaximumBandwidth();
        }
        if (null !== $object->getBinds()) {
            $values_7 = [];
            foreach ($object->getBinds() as $value_7) {
                $values_7[] = $value_7;
            }
            $data->{'Binds'} = $values_7;
        }
        if (null !== $object->getContainerIDFile()) {
            $data->{'ContainerIDFile'} = $object->getContainerIDFile();
        }
        if (null !== $object->getLogConfig()) {
            $data->{'LogConfig'} = $this->normalizer->normalize($object->getLogConfig(), 'json', $context);
        }
        if (null !== $object->getNetworkMode()) {
            $data->{'NetworkMode'} = $object->getNetworkMode();
        }
        if (null !== $object->getPortBindings()) {
            $values_8 = new \stdClass();
            foreach ($object->getPortBindings() as $key => $value_8) {
                $values_8->{$key} = $this->normalizer->normalize($value_8, 'json', $context);
            }
            $data->{'PortBindings'} = $values_8;
        }
        if (null !== $object->getRestartPolicy()) {
            $data->{'RestartPolicy'} = $this->normalizer->normalize($object->getRestartPolicy(), 'json', $context);
        }
        if (null !== $object->getAutoRemove()) {
            $data->{'AutoRemove'} = $object->getAutoRemove();
        }
        if (null !== $object->getVolumeDriver()) {
            $data->{'VolumeDriver'} = $object->getVolumeDriver();
        }
        if (null !== $object->getVolumesFrom()) {
            $values_9 = [];
            foreach ($object->getVolumesFrom() as $value_9) {
                $values_9[] = $value_9;
            }
            $data->{'VolumesFrom'} = $values_9;
        }
        if (null !== $object->getMounts()) {
            $values_10 = [];
            foreach ($object->getMounts() as $value_10) {
                $values_10[] = $this->normalizer->normalize($value_10, 'json', $context);
            }
            $data->{'Mounts'} = $values_10;
        }
        if (null !== $object->getCapAdd()) {
            $values_11 = [];
            foreach ($object->getCapAdd() as $value_11) {
                $values_11[] = $value_11;
            }
            $data->{'CapAdd'} = $values_11;
        }
        if (null !== $object->getCapDrop()) {
            $values_12 = [];
            foreach ($object->getCapDrop() as $value_12) {
                $values_12[] = $value_12;
            }
            $data->{'CapDrop'} = $values_12;
        }
        if (null !== $object->getDns()) {
            $values_13 = [];
            foreach ($object->getDns() as $value_13) {
                $values_13[] = $value_13;
            }
            $data->{'Dns'} = $values_13;
        }
        if (null !== $object->getDnsOptions()) {
            $values_14 = [];
            foreach ($object->getDnsOptions() as $value_14) {
                $values_14[] = $value_14;
            }
            $data->{'DnsOptions'} = $values_14;
        }
        if (null !== $object->getDnsSearch()) {
            $values_15 = [];
            foreach ($object->getDnsSearch() as $value_15) {
                $values_15[] = $value_15;
            }
            $data->{'DnsSearch'} = $values_15;
        }
        if (null !== $object->getExtraHosts()) {
            $values_16 = [];
            foreach ($object->getExtraHosts() as $value_16) {
                $values_16[] = $value_16;
            }
            $data->{'ExtraHosts'} = $values_16;
        }
        if (null !== $object->getGroupAdd()) {
            $values_17 = [];
            foreach ($object->getGroupAdd() as $value_17) {
                $values_17[] = $value_17;
            }
            $data->{'GroupAdd'} = $values_17;
        }
        if (null !== $object->getIpcMode()) {
            $data->{'IpcMode'} = $object->getIpcMode();
        }
        if (null !== $object->getCgroup()) {
            $data->{'Cgroup'} = $object->getCgroup();
        }
        if (null !== $object->getLinks()) {
            $values_18 = [];
            foreach ($object->getLinks() as $value_18) {
                $values_18[] = $value_18;
            }
            $data->{'Links'} = $values_18;
        }
        if (null !== $object->getOomScoreAdj()) {
            $data->{'OomScoreAdj'} = $object->getOomScoreAdj();
        }
        if (null !== $object->getPidMode()) {
            $data->{'PidMode'} = $object->getPidMode();
        }
        if (null !== $object->getPrivileged()) {
            $data->{'Privileged'} = $object->getPrivileged();
        }
        if (null !== $object->getPublishAllPorts()) {
            $data->{'PublishAllPorts'} = $object->getPublishAllPorts();
        }
        if (null !== $object->getReadonlyRootfs()) {
            $data->{'ReadonlyRootfs'} = $object->getReadonlyRootfs();
        }
        if (null !== $object->getSecurityOpt()) {
            $values_19 = [];
            foreach ($object->getSecurityOpt() as $value_19) {
                $values_19[] = $value_19;
            }
            $data->{'SecurityOpt'} = $values_19;
        }
        if (null !== $object->getStorageOpt()) {
            $values_20 = new \stdClass();
            foreach ($object->getStorageOpt() as $key_1 => $value_20) {
                $values_20->{$key_1} = $value_20;
            }
            $data->{'StorageOpt'} = $values_20;
        }
        if (null !== $object->getTmpfs()) {
            $values_21 = new \stdClass();
            foreach ($object->getTmpfs() as $key_2 => $value_21) {
                $values_21->{$key_2} = $value_21;
            }
            $data->{'Tmpfs'} = $values_21;
        }
        if (null !== $object->getUTSMode()) {
            $data->{'UTSMode'} = $object->getUTSMode();
        }
        if (null !== $object->getUsernsMode()) {
            $data->{'UsernsMode'} = $object->getUsernsMode();
        }
        if (null !== $object->getShmSize()) {
            $data->{'ShmSize'} = $object->getShmSize();
        }
        if (null !== $object->getSysctls()) {
            $values_22 = new \stdClass();
            foreach ($object->getSysctls() as $key_3 => $value_22) {
                $values_22->{$key_3} = $value_22;
            }
            $data->{'Sysctls'} = $values_22;
        }
        if (null !== $object->getRuntime()) {
            $data->{'Runtime'} = $object->getRuntime();
        }
        if (null !== $object->getConsoleSize()) {
            $values_23 = [];
            foreach ($object->getConsoleSize() as $value_23) {
                $values_23[] = $value_23;
            }
            $data->{'ConsoleSize'} = $values_23;
        }
        if (null !== $object->getIsolation()) {
            $data->{'Isolation'} = $object->getIsolation();
        }

        return $data;
    }
}
