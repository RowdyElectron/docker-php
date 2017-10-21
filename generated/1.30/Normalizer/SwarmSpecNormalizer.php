<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_30\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SwarmSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\V1_30\\Model\\SwarmSpec') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\V1_30\Model\SwarmSpec) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Docker\API\V1_30\Model\SwarmSpec();
        if (property_exists($data, 'Name')) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'Labels')) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Labels'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setLabels($values);
        }
        if (property_exists($data, 'Orchestration')) {
            $object->setOrchestration($this->denormalizer->denormalize($data->{'Orchestration'}, 'Docker\\API\\V1_30\\Model\\SwarmSpecOrchestration', 'json', $context));
        }
        if (property_exists($data, 'Raft')) {
            $object->setRaft($this->denormalizer->denormalize($data->{'Raft'}, 'Docker\\API\\V1_30\\Model\\SwarmSpecRaft', 'json', $context));
        }
        if (property_exists($data, 'Dispatcher')) {
            $object->setDispatcher($this->denormalizer->denormalize($data->{'Dispatcher'}, 'Docker\\API\\V1_30\\Model\\SwarmSpecDispatcher', 'json', $context));
        }
        if (property_exists($data, 'CAConfig')) {
            $object->setCAConfig($this->denormalizer->denormalize($data->{'CAConfig'}, 'Docker\\API\\V1_30\\Model\\SwarmSpecCAConfig', 'json', $context));
        }
        if (property_exists($data, 'EncryptionConfig')) {
            $object->setEncryptionConfig($this->denormalizer->denormalize($data->{'EncryptionConfig'}, 'Docker\\API\\V1_30\\Model\\SwarmSpecEncryptionConfig', 'json', $context));
        }
        if (property_exists($data, 'TaskDefaults')) {
            $object->setTaskDefaults($this->denormalizer->denormalize($data->{'TaskDefaults'}, 'Docker\\API\\V1_30\\Model\\SwarmSpecTaskDefaults', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getLabels()) {
            $values = new \stdClass();
            foreach ($object->getLabels() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'Labels'} = $values;
        }
        if (null !== $object->getOrchestration()) {
            $data->{'Orchestration'} = $this->normalizer->normalize($object->getOrchestration(), 'json', $context);
        }
        if (null !== $object->getRaft()) {
            $data->{'Raft'} = $this->normalizer->normalize($object->getRaft(), 'json', $context);
        }
        if (null !== $object->getDispatcher()) {
            $data->{'Dispatcher'} = $this->normalizer->normalize($object->getDispatcher(), 'json', $context);
        }
        if (null !== $object->getCAConfig()) {
            $data->{'CAConfig'} = $this->normalizer->normalize($object->getCAConfig(), 'json', $context);
        }
        if (null !== $object->getEncryptionConfig()) {
            $data->{'EncryptionConfig'} = $this->normalizer->normalize($object->getEncryptionConfig(), 'json', $context);
        }
        if (null !== $object->getTaskDefaults()) {
            $data->{'TaskDefaults'} = $this->normalizer->normalize($object->getTaskDefaults(), 'json', $context);
        }

        return $data;
    }
}
