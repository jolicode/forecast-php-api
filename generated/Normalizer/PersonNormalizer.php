<?php

/*
 * This file is part of JoliCode's Forecast PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Forecast\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use JoliCode\Forecast\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PersonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Forecast\\Api\\Model\\Person' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\Person' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Forecast\Api\Model\Person();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('first_name', $data) && null !== $data['first_name']) {
            $object->setFirstName($data['first_name']);
        } elseif (\array_key_exists('first_name', $data) && null === $data['first_name']) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('last_name', $data) && null !== $data['last_name']) {
            $object->setLastName($data['last_name']);
        } elseif (\array_key_exists('last_name', $data) && null === $data['last_name']) {
            $object->setLastName(null);
        }
        if (\array_key_exists('email', $data) && null !== $data['email']) {
            $object->setEmail($data['email']);
        } elseif (\array_key_exists('email', $data) && null === $data['email']) {
            $object->setEmail(null);
        }
        if (\array_key_exists('login', $data) && null !== $data['login']) {
            $object->setLogin($data['login']);
        } elseif (\array_key_exists('login', $data) && null === $data['login']) {
            $object->setLogin(null);
        }
        if (\array_key_exists('admin', $data) && null !== $data['admin']) {
            $object->setAdmin($data['admin']);
        } elseif (\array_key_exists('admin', $data) && null === $data['admin']) {
            $object->setAdmin(null);
        }
        if (\array_key_exists('archived', $data) && null !== $data['archived']) {
            $object->setArchived($data['archived']);
        } elseif (\array_key_exists('archived', $data) && null === $data['archived']) {
            $object->setArchived(null);
        }
        if (\array_key_exists('subscribed', $data) && null !== $data['subscribed']) {
            $object->setSubscribed($data['subscribed']);
        } elseif (\array_key_exists('subscribed', $data) && null === $data['subscribed']) {
            $object->setSubscribed(null);
        }
        if (\array_key_exists('avatar_url', $data) && null !== $data['avatar_url']) {
            $object->setAvatarUrl($data['avatar_url']);
        } elseif (\array_key_exists('avatar_url', $data) && null === $data['avatar_url']) {
            $object->setAvatarUrl(null);
        }
        if (\array_key_exists('roles', $data) && null !== $data['roles']) {
            $values = [];
            foreach ($data['roles'] as $value) {
                $values[] = $value;
            }
            $object->setRoles($values);
        } elseif (\array_key_exists('roles', $data) && null === $data['roles']) {
            $object->setRoles(null);
        }
        if (\array_key_exists('updated_at', $data) && null !== $data['updated_at']) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.v\\Z', $data['updated_at']));
        } elseif (\array_key_exists('updated_at', $data) && null === $data['updated_at']) {
            $object->setUpdatedAt(null);
        }
        if (\array_key_exists('updated_by_id', $data) && null !== $data['updated_by_id']) {
            $object->setUpdatedById($data['updated_by_id']);
        } elseif (\array_key_exists('updated_by_id', $data) && null === $data['updated_by_id']) {
            $object->setUpdatedById(null);
        }
        if (\array_key_exists('harvest_user_id', $data) && null !== $data['harvest_user_id']) {
            $object->setHarvestUserId($data['harvest_user_id']);
        } elseif (\array_key_exists('harvest_user_id', $data) && null === $data['harvest_user_id']) {
            $object->setHarvestUserId(null);
        }
        if (\array_key_exists('weekly_capacity', $data) && null !== $data['weekly_capacity']) {
            $object->setWeeklyCapacity($data['weekly_capacity']);
        } elseif (\array_key_exists('weekly_capacity', $data) && null === $data['weekly_capacity']) {
            $object->setWeeklyCapacity(null);
        }
        if (\array_key_exists('working_days', $data) && null !== $data['working_days']) {
            $object->setWorkingDays($this->denormalizer->denormalize($data['working_days'], 'JoliCode\\Forecast\\Api\\Model\\PersonWorkingDays', 'json', $context));
        } elseif (\array_key_exists('working_days', $data) && null === $data['working_days']) {
            $object->setWorkingDays(null);
        }
        if (\array_key_exists('color_blind', $data) && null !== $data['color_blind']) {
            $object->setColorBlind($data['color_blind']);
        } elseif (\array_key_exists('color_blind', $data) && null === $data['color_blind']) {
            $object->setColorBlind(null);
        }
        if (\array_key_exists('personal_feed_token_id', $data) && null !== $data['personal_feed_token_id']) {
            $object->setPersonalFeedTokenId($data['personal_feed_token_id']);
        } elseif (\array_key_exists('personal_feed_token_id', $data) && null === $data['personal_feed_token_id']) {
            $object->setPersonalFeedTokenId(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        $data['first_name'] = $object->getFirstName();
        $data['last_name'] = $object->getLastName();
        $data['email'] = $object->getEmail();
        if (null !== $object->getLogin()) {
            $data['login'] = $object->getLogin();
        }
        if (null !== $object->getAdmin()) {
            $data['admin'] = $object->getAdmin();
        }
        if (null !== $object->getArchived()) {
            $data['archived'] = $object->getArchived();
        }
        if (null !== $object->getSubscribed()) {
            $data['subscribed'] = $object->getSubscribed();
        }
        if (null !== $object->getAvatarUrl()) {
            $data['avatar_url'] = $object->getAvatarUrl();
        }
        if (null !== $object->getRoles()) {
            $values = [];
            foreach ($object->getRoles() as $value) {
                $values[] = $value;
            }
            $data['roles'] = $values;
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s.v\\Z');
        }
        if (null !== $object->getUpdatedById()) {
            $data['updated_by_id'] = $object->getUpdatedById();
        }
        if (null !== $object->getHarvestUserId()) {
            $data['harvest_user_id'] = $object->getHarvestUserId();
        }
        if (null !== $object->getWeeklyCapacity()) {
            $data['weekly_capacity'] = $object->getWeeklyCapacity();
        }
        if (null !== $object->getWorkingDays()) {
            $data['working_days'] = $this->normalizer->normalize($object->getWorkingDays(), 'json', $context);
        }
        if (null !== $object->getColorBlind()) {
            $data['color_blind'] = $object->getColorBlind();
        }
        if (null !== $object->getPersonalFeedTokenId()) {
            $data['personal_feed_token_id'] = $object->getPersonalFeedTokenId();
        }

        return $data;
    }
}
